<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Routing\Router;

class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        
        $title = "";
        $meta_description = "";
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Pages', 'action' => 'display', $page]);
        $og_image = "";
        
        switch ($page) {
            case "home":
                $title = __('Web Hosting, Tên Miền, Cloud VPS, Email, Server');
                $meta_description = __('Nhà Cung Cấp Web Hosting, Tên Miền, Cloud VPS, Email Doanh Nghiệp, Thuê Server, Thuê Chỗ Đặt Máy Chủ - Uy Tín Tại Việt Nam');
                $og_type = "website";
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "customers":
                $title = __('Danh sách khách hàng');
                $meta_description = __('Hãy yên tâm rằng bạn sẽ nhận được dịch vụ chuyên nghiệp và chất lượng khi bạn sử dụng dịch vụ của chúng tôi. Dịch vụ BKHOST hơn 30.000 người sử dụng trong toàn quốc và quốc tế, các tổ chức chính phủ');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "movedata":
                $title = __('Dịch vụ chuyển dữ liệu MIỄN PHÍ');
                $meta_description = __('Hãy yên tâm rằng bạn sẽ nhận được dịch vụ chuyên nghiệp và chất lượng khi bạn sử dụng dịch vụ của chúng tôi. Dịch vụ BKHOST hơn 30.000 người sử dụng trong toàn quốc và quốc tế, các tổ chức chính phủ');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "affiliate":
                $title = __('Chính sách đại lí và Affiliate');
                $meta_description = __('Trở thành đại lí của BKHOST bạn sẽ được hỗ trợ toàn diện, Chương trình quản lý bằng phần mềm chuyên nghiệp, hiện đại, dễ sử dụng sẽ giúp quý khách dễ dàng tập trung vào kinh doanh để phát triển doanh số cao nhất.');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "network-solutions":
                $title = __('Giải pháp mạng của chúng tôi');
                $meta_description = __('Việc lựa chọn nhà cung cấp tin cậy để quản lý dịch vụ của bạn là điều may mắn với chúng tôi. Do đó chúng tôi sẽ không để bạn mất niềm tin một  lần  nữa,  Dịch  vụ  Hosting  của  bạn  sẽ  được  đội  ngũ  kỹ  thuật  của chúng tôi thay bạn chuyển dữ liệu một cách an toàn nhất và không bị giám đoạn 1s nào?');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "invest":
                $title = __('Quan hệ đầu tư');
                $meta_description = __('Trụ sở chính đặt tại Hà Nội - Việt Nam, BKHOST đang phục vụ khoảng 30.000 người sử dụng với đội ngũ nhân viên hơn 20 thành viên. BKHOST cung cấp các dịch vụ trên Internet cho phép các doanh nghiệp sử dụng những ứng dụng công nghệ thông tin hiện đại nhất.');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "why-choose-bkhost":
                $title = __('Tại sao chọn BKHOST');
                $meta_description = __('Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môn và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "about":
                $title = __('Về BKHOST');
                $meta_description = __('Các nhà lãnh đạo BKHOST chúng tôi là những chuyên gia về CNTT. Chúng luôn tạo nên tảng tốt nhất để thay đổi các doanh nghiệp tiếp tận đến CNTT một cách hiệu quả. Bằng cách sử dụng những sản phẩm tốt nhất của chúng tôi.');
                $og_image = SITE_URL . '/img/slider/slide1.jpg';
                break;
            case "backup":
                $title = __('Dịch vụ Backup hàng ngày');
                $meta_description = __('Dịch vụ Backup Hosting hàng ngày là điều mà bạn yên tâm nhất với dịch vụ bạn đang chạy. Điều này sẽ hạn chế tối đa rủi ro khi bạn bị mất dữ liệu');
                $og_image = SITE_URL . '/img/frontend/lich-backup.png';
                break;
            case "support":
                $title = __('Hỗ trợ 24/7');
                $meta_description = __('Hỗ trợ 24/7 là cốt lõi của chúng tôi và chúng tôi muốn hỗ trợ bạn để giải quyết các vấn đề càng sớm càng tốt. Đáp ứng tôi đa yêu cầu của bạn');
                $og_image = SITE_URL . '/img/frontend/ho-tro-khach-hang.jpg';
                break;
            case "khuyen-mai":
                $title = __('Chương trình khuyến mãi');
                $meta_description = __('Khuyến mại dịch vụ Web Hosting, tên miền, Cloud VPS, Thuê Server, Thuê chỗ đặt Server lên đến 40%, Hãy đăng ký ngay hôm nay đển nhận nhiều ưu đãi nhất');
                $og_image = SITE_URL . '/img/promo/head-background.png';
                break;
            default:
                break;
        }
        $this->set('title', $title);
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
