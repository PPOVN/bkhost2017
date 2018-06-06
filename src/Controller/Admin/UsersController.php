<?php

namespace App\Controller\Admin;

use App\Controller\AdminsController;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UsersController extends AdminsController {

    public $paginate = [
        'fields' => ['Users.id', 'Users.username', 'Users.email', 'Users.role'],
        'limit' => 20,
        'order' => [
            'Users.id' => 'desc'
        ]
    ];

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout', 'forgot_password', 'checkuserloggedin']);
    }

    public function index() {
        $this->set('users', $this->paginate('Users'));
        $this->set('title', __('Quản lý thành viên'));
    }

    public function login() {
        $user = $this->Auth->user();
        if ($user) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $username = $this->request->data('username');
            $password = $this->request->data('password');
            $status = "error";
            $msg = "";
            $redirect_url = $this->request->data('redirect_url');
            if (empty($redirect_url)) {
                $redirect_url = $this->Auth->redirectUrl();
            }

            if (empty($username)) {
                $msg .= "<p>" . __("Vui lòng nhập Tài khoản!") . "</p>";
            } else if (!$this->Commons->is_valid_username($username)) {
                $msg .= "<p>" . __("Tên tài khoản không hợp lệ!") . "</p>";
            }
            if (empty($password)) {
                $msg .= "<p>" . __("Vui lòng nhập Mật khẩu!") . "</p>";
            }
            if (empty($msg)) {
                $username_check = $this->Users->find('all', array(
                    'conditions' => array('Users.username' => $username)
                ));
                if ($username_check->count() == 1) {
                    $user = $username_check->first();
                    $hash_password = $this->Commons->hash_password($password, $user->salt);
                    $user_check = $this->Users->find('all', array(
                        'conditions' => array(
                            'Users.username' => $username,
                            'Users.password' => $hash_password
                        )
                    ));
                    if ($user_check->count() == 1) {
                        $this->request->data['password'] = $hash_password;
                        $user = $user_check->first();
                        if ($user) {
                            $this->Auth->setUser($user);
                            $status = "success";
                        } else {
                            $msg .= "<p>" . __("Sai tài khoản hoặc mật khẩu!3") . "</p>";
                        }
                    } else {
                        $msg .= "<p>" . __("Sai tài khoản hoặc mật khẩu!") . "</p>";
                    }
                } else {
                    $msg .= "<p>" . __("Sai tài khoản hoặc mật khẩu!") . "</p>";
                }
            }
            echo json_encode(array(
                'status' => $status,
                'message' => $msg,
                'redirect_url' => $redirect_url
            ));
            exit;
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    function checkuserloggedin() {
        $status = "none";
        if ($this->request->is('post') and $this->request->data('check') == 1) {
            $user = $this->Auth->user();
            if ($user) {
                $status = 'success';
            } else {
                $status = 'error';
            }
        }
        echo json_encode(array(
            'status' => $status,
        ));
        exit;
    }

    public function profile() {
        $user = $this->Auth->user();
        $user_meta_table = TableRegistry::get('user_meta');
        $user_meta = $user_meta_table->get($user->id);
        $this->set('user', $user);
        $this->set('usermeta', $user_meta);
        
        if ($this->request->is(['post', 'put'])) {
            $password = $this->request->data('password');
            $confirm_password = $this->request->data('confirm_password');
            $email = $this->request->data('email');
            $phone = $this->request->data('phone');

            if (!empty($password)) {
                $hash_password = $this->Commons->hash_password($password, $user->salt);
                $user->password = $hash_password;
            }
            $email_check = $this->Users->find('all', array(
                'conditions' => array('Users.email' => $email)
            ));

            if ($password != $confirm_password) {
                $this->Flash->warning(__('Xác nhận Mật khẩu không đúng!'));
            } else if (!$this->Commons->isValidEmail($email)) {
                $this->Flash->warning(__('Hãy nhập 1 Địa chỉ Email hợp lệ!'));
            } else if ($user->email != $email and $email_check->count() > 0) {
                $this->Flash->warning(__('Địa chỉ Email đã được sử dụng. Hãy thử một Email khác!'));
            } else if (!empty($phone) and ! $this->Commons->is_valid_phone_number($phone)) {
                $this->Flash->warning(__('Hãy nhập 1 Số điện thoại hợp lệ!'));
            } else {
                $user->email = $email;
                // Update user
                $savedUser = $this->Users->save($user);

                // Update User Meta Data
                if (!$user_meta) {
                    $user_meta = $user_meta_table->newEntity();
                    $user_meta->user_id = $user->id;
                }
                $user_meta->fullname = $this->request->data('fullname');
                $user_meta->address = $this->request->data('address');
                $user_meta->phone = $phone;
                $user_meta->sex = $this->request->data('sex');
                $user_meta->updated_date = date('Y-m-d H:i:s');
                $savedUserMeta = $user_meta_table->save($user_meta);

                if ($savedUser and $savedUserMeta) {
                    $this->Flash->success(__('Cập nhật thành công!'));
                    return $this->redirect(['action' => 'profile']);
                }

                $this->Flash->error(__('Cập nhật không thành công!'));
            }
        }
        $this->set('title', __('Hồ sơ cá nhân'));
    }

    public function forgotPassword() {
        if ($this->request->is('post')) {
            $status = "error";
            $msg = "Đang cập nhật!";

            echo json_encode(array(
                'status' => $status,
                'message' => $msg
            ));
            exit;
        } else {
            return $this->redirect(['action' => 'login']);
        }
    }

    /**
     * Add new a user
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $username = $this->request->data('username');
            $password = $this->request->data('password');
            $confirm_password = $this->request->data('confirm_password');
            $salt = $this->Commons->random_salt(30);
            $hash_password = $this->Commons->hash_password($password, $salt);
            $email = $this->request->data('email');
            $confirm_email = $this->request->data('confirm_email');
            $user->username = $username;
            $user->password = $hash_password;
            $user->email = $email;
            $user->role = $this->request->data('role');
            $user->salt = $salt;
            $phone = $this->request->data('phone');

            $username_check = $this->Users->find('all', array(
                'conditions' => array('Users.username' => $username)
            ));
            $email_check = $this->Users->find('all', array(
                'conditions' => array('Users.email' => $email)
            ));

            if (!$this->Commons->is_valid_username($username)) {
                $this->Flash->warning(__('Tên tài khoản không hợp lệ!'));
            } else if ($username_check->count() > 0) {
                $this->Flash->warning(__('Tên tài khoản đã được sử dụng. Hãy thử một tài khoản khác!'));
            } else if ($password != $confirm_password) {
                $this->Flash->warning(__('Xác nhận Mật khẩu không đúng!'));
            } else if (!$this->Commons->isValidEmail($email)) {
                $this->Flash->warning(__('Hãy nhập 1 Địa chỉ Email hợp lệ!'));
            } else if ($email != $confirm_email) {
                $this->Flash->warning(__('Xác nhận Email không đúng!'));
            } else if ($email_check->count() > 0) {
                $this->Flash->warning(__('Địa chỉ Email đã được sử dụng. Hãy thử một Email khác!'));
            } else if (!empty($phone) and ! $this->Commons->is_valid_phone_number($phone)) {
                $this->Flash->warning(__('Hãy nhập 1 Số điện thoại hợp lệ!'));
            } else {
                // Save User
                $savedUser = $this->Users->save($user);
                if ($savedUser) {
                    // Add User Meta Data
                    $user_meta_table = TableRegistry::get('user_meta');
                    $user_meta_data = $user_meta_table->newEntity();
                    $user_meta_data->user_id = $savedUser->id;
                    $user_meta_data->fullname = $this->request->data('fullname');
                    $user_meta_data->address = $this->request->data('address');
                    $user_meta_data->phone = $phone;
                    $user_meta_data->sex = $this->request->data('sex');
                    $user_meta = $user_meta_table->save($user_meta_data);
                    if ($user_meta) {
                        $this->Flash->success(__('Thêm mới thành viên thành công!'));
                        return $this->redirect(['action' => 'edit', $savedUser->id]);
                    } else {
                        $this->Users->delete($savedUser);
                    }
                }
                $this->Flash->error(__('Không thể thêm mới thành viên!'));
            }
        }
        $this->set('user', $user);
        $this->set('title', __('Thêm mới thành viên'));
    }

    /**
     * Change user information
     * 
     * @param integer $id User's ID to edit
     */
    public function edit($id = 0) {
        if ($id <= 0) {
            return $this->redirect(['action' => 'index']);
        }
        $user = $this->Users->get($id);
        $user_meta_table = TableRegistry::get('user_meta');
        $user_meta = $user_meta_table->get($id);

        if ($this->request->is(['post', 'put'])) {
            $password = $this->request->data('password');
            $confirm_password = $this->request->data('confirm_password');
            $email = $this->request->data('email');
            $phone = $this->request->data('phone');
            $user->role = $this->request->data('role');

            if (!empty($password)) {
                $hash_password = $this->Commons->hash_password($password, $user->salt);
                $user->password = $hash_password;
            }
            $email_check = $this->Users->find('all', array(
                'conditions' => array('Users.email' => $email)
            ));

            if ($password != $confirm_password) {
                $this->Flash->warning(__('Xác nhận Mật khẩu không đúng!'));
            } else if (!$this->Commons->isValidEmail($email)) {
                $this->Flash->warning(__('Hãy nhập 1 Địa chỉ Email hợp lệ!'));
            } else if ($user->email != $email and $email_check->count() > 0) {
                $this->Flash->warning(__('Địa chỉ Email đã được sử dụng. Hãy thử một Email khác!'));
            } else if (!empty($phone) and ! $this->Commons->is_valid_phone_number($phone)) {
                $this->Flash->warning(__('Hãy nhập 1 Số điện thoại hợp lệ!'));
            } else {
                $user->email = $email;
                // Update user
                $savedUser = $this->Users->save($user);

                // Update User Meta Data
                if (!$user_meta) {
                    $user_meta = $user_meta_table->newEntity();
                    $user_meta->user_id = $id;
                }
                $user_meta->fullname = $this->request->data('fullname');
                $user_meta->address = $this->request->data('address');
                $user_meta->phone = $phone;
                $user_meta->sex = $this->request->data('sex');
                $user_meta->updated_date = date('Y-m-d H:i:s');
                $savedUserMeta = $user_meta_table->save($user_meta);

                if ($savedUser and $savedUserMeta) {
                    $this->Flash->success(__('Cập nhật thành công!'));
                    return $this->redirect(['action' => 'edit', $id]);
                }

                $this->Flash->error(__('Cập nhật không thành công!'));
            }
        }

        $this->set('title', __('Chỉnh sửa thông tin thành viên'));
        $this->set('user', $user);
        $this->set('usermeta', $user_meta);
    }

    /**
     * Delete a user permanently
     * 
     * @param int $id User ID
     * @return action
     */
    public function delete($id = 0) {
        if ($id <= 0) {
            return $this->redirect(['action' => 'index']);
        }
        $user = $this->Users->get($id);
        $usermeta_table = TableRegistry::get('user_meta');
        $usermeta = $$usermeta_table->get($id);
        $this->Users->delete($user);
        $usermeta->delete($usermeta);
        $this->Flash->success(__('Đã xóa thành viên thành công!'));
        return $this->redirect(['action' => 'index']);
    }

}
