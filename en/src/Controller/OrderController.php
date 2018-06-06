<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class OrderController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('BKHOST cung cấp các dịch vụ Web Hosting, Tên miền, Cloud VPS, Thuê Server, Thuê chỗ đặt Server, Thiết kế website. Chúng tôi sẽ đem đến dịch vụ tốt nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Order', 'action' => 'index']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Đặt hàng dịch vụ'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

}
