<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Filesystem\File;
use Cake\Mailer\Email;
use Cake\Routing\Router;

class PaymentController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        if ($this->request->is('post')) {
            $email_address = $this->request->data('email');
            $order_num = $this->request->data('order_num');
            $date = $this->request->data('date');
            $message = $this->request->data('message');
            $recaptcha = $this->request->data('g-recaptcha-response');

            $google_url = "https://www.google.com/recaptcha/api/siteverify";
            $secret = '6LfEACcUAAAAAEPFl7Ayri9GuySwv9dvvYGLP-GO';
            $url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
            $data = $this->Commons->getCurlData($url);
            $response = json_decode($data, true);
            if (!$response['success']) {
                $this->Flash->warning(__('Captcha không hợp lệ!'));
            } else if (!$this->Commons->isValidEmail($email_address)) {
                $this->Flash->warning(__('Hãy nhập 1 Địa chỉ Email hợp lệ!'));
            } else if (empty($order_num)) {
                $this->Flash->warning(__('Vui lòng nhập Số hóa đơn hoặc Tên miền hoặc IP!'));
            } else if (empty($date)) {
                $this->Flash->warning(__('Vui lòng nhập ngày chuyển tiền!'));
            } else if (empty($message)) {
                $this->Flash->warning(__('Vui lòng nhập nội dung thông báo!'));
            } else {
                $dir = "tmp" . DS . md5(time());
                $image = $_FILES['file'];
                if (!empty($image['name'])) {
                    $tmp_name = WWW_ROOT . $dir . $image['name'];
                    if (move_uploaded_file($image['tmp_name'], $tmp_name )) {
                        $email = new Email('default');
                        $email->from([$email_address])
                                ->to('info@bkhost.vn')
                                ->subject('BKHOST - Thông báo thanh toán')
                                ->attachments($tmp_name)
                                ->viewVars(['order_num' => $order_num, 'email' => $email_address, 'date' => $date,  'message' => $message])
                                ->template('payment', 'default')
                                ->emailFormat('html')
                                ->send();
                        $this->Flash->success(__('Gửi thông báo thành công!'));
                        
                        // Delete file after sent
                        $tmp_file = new File($tmp_name);
                        if ($tmp_file->exists()) {
                            $tmp_file->delete();
                        }
                    } else {
                        $this->Flash->warning(__('Xảy ra lỗi!'));
                    }
                }
                
            }
        }

        $meta_description = __('BKHOST cung cấp nhiều hình thức thanh toán khác nhau như ATM, Chuyển khoản Internet Banking, Paypal, Baokim, ngân lượng,....');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Payment', 'action' => 'index']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Hình thức thanh toán'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    private function uploadDir($path = array()) {
        return $this->wwwRoot . implode(DS, $path);
    }

    private function uploadFile($path = array(), $filetoupload = null) {
        if (!$filetoupload) {
            return false;
        }
        $dir = new Folder($this->uploadDir($path), true, 755);
        $tmp_file = new File($filetoupload['tmp_name']);
        if (!$tmp_file->exists()) {
            return false;
        }
        $file = new File($dir->path . DS . $filetoupload['name']);
        if (!$tmp_file->copy($dir->pwd() . DS . $filetoupload['name'])) {
            return false;
        }
        $file->close();
        $tmp_file->delete();
        return true;
    }
}
