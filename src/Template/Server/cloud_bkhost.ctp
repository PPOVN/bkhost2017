<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/cloud_bkhost.ctp with your own version.');
//endif;
?>
<div class="cloud-intro">
    <div class="container">
        <h1>Cloud Private BKHOST</h1>
        <h3>An toàn, khả năng mở rộng, cơ sở hạ tầng điện toán đám mây mạnhmẽ cho phép sử dụng riêng cho dịch vụ của bạn</h3>
        <blockquote>Được thiết lập hạ tầng điện toán đám mây bằng 100% công nghệ SSD Intel Enterprise và đường truyền tốc độ cao của chúng tôi, cho phép dịch vụ 
		của bạn được sử dụng trên tài nguyên hệ thống máy chủ là dữ liệu độc lập. Nếu bạn yêu cầu tính bảo mật cao và nghiêm ngặt thì bạn sẽ thấy rằng chúng tôi luôn là 
            giải pháp phù hợp nhất đem đến cho bạn.</blockquote>
    </div>
</div>

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-shield" aria-hidden="true"></i> Kiểm soát và bảo mật dịch vụ</h2>
        <p>Hệ thống CLoud Private BKHOST có thể cung cấp cho bạn một mức độ kiểm soát và an ninh bởi vì bạn là người sử dụng Cloud VPS của chúng tôi.</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">Chuyên môn nghiệp vụ <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p>Chúng tôi có chuyên môn cần thiết để thiết kế, triển khai và vận hành Cloud VPS mà bạn cần.</p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-globe" aria-hidden="true"></i> Hỗ trợ chuyên nghiệp</h2>
        <p>Hệ thống chúng tôi hỗ trợ bạn thông qua các kênh như Email, Tichket, Live Chat, Điện thoại, Remote từ xa đến 
            bạn bất cứ thời gian nào 24/7 cùng đội kỹ thuật chuyên nghiệp của chúng tôi.</p>
    </div>
</div>

<?= $this->element('other_services') ?>