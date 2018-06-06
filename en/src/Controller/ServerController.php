<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class ServerController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('Thuê server - Thuê máy chủ là dịch vụ mà BKHOST nhiều năm kinh nghiệp việc cung cấp sản phẩm này tới nhiều doanh nghiệp lớn tại Việt Nam');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'index']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Cloud & Server'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
        return $this->render('dedicate_server');
    }

    public function cloudVps() {
        $meta_description = __('Dịch vụ thuê vps giá rẻ - Cho thuê máy chủ ảo VPS cấu hình cao, Công nghệ SSD đem đến chất lượng, ổn định và tốc độ cao. Hỗ trợ 24/7!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'cloudVps']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Cloud VPS'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function cloudVpsSpecifications() {
        $meta_description = __('BKHOST là nhà cung cấp dịch vụ cho thuê Cloud VPS - Thuê máy chủ ảo chất lượng cao tại Việt Nam, chúng tôi luôn hỗ trợ 24/7, Đăng ký ngay hôm nay!');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'cloudVpsSpecifications']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Thông số kỹ thuật Cloud VPS'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function cloudBkhost() {
        $meta_description = __('Cloud VPS của chúng tôi, cho phép bạn sử dụng tài nguyên trên hệ thống máy chủ là dữ liệu độc lập mang tính bảo mật cao, nghiêm ngặt là giải pháp tốt nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'cloudBkhost']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Cloud BKHOST'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function dedicateServer() {
        $meta_description = __('Dịch vụ thuê máy chủ - Thuê Server, BKHOST là đơn vị hàng đầu Việt Nam triển khai dịch vụ này với nhiều chủng loại hiện hành như Dell, IBM, HP...');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'dedicateServer']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Dedicate Server'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function dedicateServerSpecifications() {
        $meta_description = __('Dịch vụ cho thuê máy chủ - Thuê server tại BKHOST luôn có giá tốt nhất và hiệu xuất cực cao cho server của bạn. Hãy đăng ký Hotline: 0984131161');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'dedicateServerSpecifications']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Thông số kỹ thuật Dedicate Server'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function colo() {
        $meta_description = __('Dịch vụ cho thuê chỗ đặt máy chủ - Colocation tại BKHOST luôn mang đến không gian, hạ tầng chỗ đặt lý tưởng, với chi phí tối ưu nhất cho bạn. Đăng ký ngay');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'colo']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Thuê chỗ đặt máy chủ'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function backupVps() {
        $meta_description = __('Dịch vụ Backup Server luôn đảm bảo an toàn trong mọi trường hợp khi bạn mất dữ liệu với sự cố không mong muốn sảy ra. BKHOST sẽ giúp bạn điều đó');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'backupVps']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Dịch vụ Backup VPS'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function serverAdministration() {
        $meta_description = __('Dịch vụ quản trị máy chủ tại BKHOST sẽ hỗ trợ bạn trong quá trình vận hành máy chủ, Điều này sẽ luôn tiện dụng cho bạn với chi phí thấp hơn. Đăng ký ngay');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Server', 'action' => 'serverAdministration']);
        $og_image = SITE_URL . '/img/frontend/server-bkhost1.png';
        
        $this->set('title', __('Dịch vụ quản trị máy chủ'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

}
