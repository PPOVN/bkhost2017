<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class EmailController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('Dịch vụ Email doanh nghiệp - Email công ty, BKHOST là đơn vị tiên phong triển khai các dịch vụ email doanh nghiệp cho công ty tập đoàn lớn trong cả nước');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Email', 'action' => 'index']);
        $og_image = SITE_URL . '/img/frontend/mobile-ipad-bkhost.png';
        
        $this->set('title', __('Email doanh nghiệp vĩnh viễn'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function rent() {
        $meta_description = __('Email doanh nghiệp - Email công ty là dịch vụ Email đảm bảo khả năng gửi và nhận Email chính xác nhất, tốc độ nhanh và bảo mật cao nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Email', 'action' => 'rent']);
        $og_image = SITE_URL . '/img/frontend/mobile-ipad-bkhost.png';
        
        $this->set('title', __('Email doanh nghiệp thuê theo tháng'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function backup() {
        $meta_description = __('Dịch vụ Backup Email - Restore Email tại BKHOST, chúng tôi có nhiều năm kinh nghiệp triển khai dịch vụ này. Hãy đăng ký nhanh theo Hotline: 0984131161');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Email', 'action' => 'backup']);
        $og_image = SITE_URL . '/img/frontend/mobile-ipad-bkhost.png';
        
        $this->set('title', __('Dịch vụ Backup Email'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

}
