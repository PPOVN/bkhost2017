<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class HostingController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('Dịch vụ Web Hosting công nghệ SSD, Website bạn sẽ load web trong 1s, Chúng tôi cam kết chất lượng tốt nhất, hỗ trợ tốt nhất 24/7. Đăng ký ngay hôm nay!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'index']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Web Hosting'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
        return $this->render('personal');
    }

    public function personal() {
        $meta_description = __('Thưởng thức Hosting cá nhân có độ tin cậy cao, hỗ trợ và hiệu suất tốt nhất, bắt đầu tài khoản Hosting cá nhân của bạn ngay hôm nay');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'personal']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Hosting cá nhân'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function business() {
        $meta_description = __('Hosting doanh nghiệp với công nghệ SSD sẽ đem đến Website bạn load trong 1s, Hosting doanh nghiệp chúng tôi sẽ đáp ứng được nhiều yêu cầu khắt khe nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'business']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Hosting doanh nghiệp'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function wordpress() {
        $meta_description = __('Dịch vụ Hosting WordPress được cấu hình đặc biệt dành cho các website sử dụng mã nguồn mở WordPress để đạt được tốc độ và bảo mật cao nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'wordpress']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('WordPress Hosting'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function personalSpecifications() {
        $meta_description = __('Hosting cá nhân, đây là gói dịch vụ cơ bản dành cho các khách hàng mới sử dụng Website trong giai đoạn đầu phát triển, mức chi phí vừa phải và hợp lý');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'personalSpecifications']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Thông số kỹ thuật Hosting cá nhân'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function businessSpecifications() {
        $meta_description = __('Hosting doanh nghiệp với công nghệ SSD tại BKHOST Cho phép bạn tận hưởng tính năng cao cấp với tốc độ và giá cả phải chăng. Đăng ký ngay hôm nay!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'businessSpecifications']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Thông số kỹ thuật Hosting doanh nghiệp'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function wordpressSpecifications() {
        $meta_description = __('Hosting wordpress được thiết kế chuyên biệt cho mã nguồn WordPress, đem đến dịch vụ hoàn hảo giúp bạn dễ dàng cài đặt và hạn chế mã độc tấn công');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Hosting', 'action' => 'wordpressSpecifications']);
        $og_image = SITE_URL . '/img/slider/slide1.jpg';
        
        $this->set('title', __('Thông số kỹ thuật Hosting WordPress'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }
}
