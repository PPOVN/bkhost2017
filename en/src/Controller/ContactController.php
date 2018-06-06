<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Routing\Router;

class ContactController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        if ($this->request->is('post')) {
            $name = $this->request->data('name');
            $email_address = $this->request->data('email');
            $phone = $this->request->data('phone');
            $address = $this->request->data('address');
            $message = $this->request->data('message');
            $recaptcha = $this->request->data('g-recaptcha-response');

            $google_url = "https://www.google.com/recaptcha/api/siteverify";
            $secret = '6LfEACcUAAAAAEPFl7Ayri9GuySwv9dvvYGLP-GO';
            $url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
            $data = $this->Commons->getCurlData($url);
            $response = json_decode($data, true);
            if (!$response['success']) {
                $this->Flash->warning(__('Captcha không hợp lệ!'));
            } else if (empty($name)) {
                $this->Flash->warning(__('Vui lòng nhập Họ tên của bạn!'));
            } else if (!$this->Commons->isValidEmail($email_address)) {
                $this->Flash->warning(__('Hãy nhập 1 Địa chỉ Email hợp lệ!'));
            } else if (!$this->Commons->is_valid_phone_number($phone)) {
                $this->Flash->warning(__('Hãy nhập 1 Số điện thoại hợp lệ!'));
            } else {
                $email = new Email('default');
                $email->from([$email_address => $name])
                        ->to('info@bkhost.vn')
                        ->subject('BKHOST - Liên hệ')
                        ->viewVars(['name' => $name, 'email' => $email_address, 'phone' => $phone, 'address' => $address, 'message' => $message])
                        ->template('contact', 'default')
                        ->emailFormat('html')
                        ->send();
                $this->Flash->success(__('Gửi thư thành công!'));
            }
        }

        $meta_description = __('Chúng tôi luôn mong muốn nhận được sự phản hồi về sản phẩm và dịch vụ và rất mong nhận được sự chia sẻ của bạn để chúng tôi có thể phục vụ tốt hơn!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Contact', 'action' => 'index']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Liên hệ'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

}
