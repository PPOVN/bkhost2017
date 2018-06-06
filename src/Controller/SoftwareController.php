<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class SoftwareController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('Chúng tôi cung cấp các phần mềm chuyên biệt cho những hệ thống Cloud VPS, Server vật lý như: Cpanel, DirectAdmin, Plesk, LiteSpeed, Cloud Linux...');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Software', 'action' => 'index']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Phần mềm cho hệ thống máy chủ'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function ssl() {
        $meta_description = __('Dịch vụ SSL luôn đem đến sự an toàn cho website của bạn, BKHOST sẽ giúp bạn thực hiện điều đó một cách nhanh nhất, Đăng ký ngay hôm nay!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Software', 'action' => 'ssl']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Chứng chỉ Bảo mật SSL'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function viSaoCanBaoVeWebsite() {
        $meta_description = __('Dịch vụ SSL đảm bảo rằng tất cả các dữ liệu được truyền giữa các máy chủ web và các trình duyệt được an toàn nhất và luôn mang tính riêng tư, tách rời');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Software', 'action' => 'viSaoCanBaoVeWebsite']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Vì sao cần bảo vệ Website'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

}
