<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/vi_sao_can_bao_ve_website.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/ssl-la-gi.png', ['alt' => 'SSl']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>Hiểu hơn về bảo mật SSL</h1>
                        <h3>Bảo mật chứng chỉ SSL là gì?</h3>
                        <p>SSL đảm bảo rằng tất cả các dữ liệu được truyền giữa các máy chủ web và các trình duyệt được mang tính riêng tư.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-shield" aria-hidden="true"></i> SSL là gì?</h2>
        <p>SSL là viết tắt của từ Secure Sockets Layer. Đây là một tiêu chuẩn an ninh công nghệ toàn cầu tạo ra một liên kết giữa máy chủ 
            web và trình duyệt. Liên kết này đảm bảo tất cả dữ liệu trao đổi giữa máy chủ web và trình duyệt luôn được bảo mật và an toàn.</p>
        <p>SSL đảm bảo rằng tất cả các dữ liệu được truyền giữa các máy chủ web và các trình duyệt được mang tính riêng tư, tách rời. 
            SSL là một chuẩn công nghệ được sử dụng bởi hàng triệu trang web trong việc bảo vệ các giao dịch trực tuyến với khách hàng của họ.</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">SSL làm việc như thế nào <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p class="mb30">Công nghệ SSL là bảo vệ những giao dịch trực tuyến và giúp nâng cao mức độ tin cậy của Website đối với khách hàng chỉ trong 3 bước</p>
        <div class="row">
            <div class="col-sm-4 mb20">
                <p class="mb20"><?= $this->Html->image('frontend/icon-ssl-128.png', ['alt' => 'SSl']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">1.</span>
                    </div>
                    <div class="col-xs-10 t_left">SSL mã hóa các thông tin nhạy cảm trong quá trình giao dịch trực tuyến</div>
                </div>
            </div>
            <div class="col-sm-4 mb20">
                <p class="mb20"><?= $this->Html->image('frontend/icon-website.png', ['alt' => 'Website']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">2.</span>
                    </div>
                    <div class="col-xs-10 t_left">Mỗi chứng chỉ SSL được tạo ra cho một Website duy nhất</div>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="mb20"><?= $this->Html->image('frontend/icon-trust.png', ['alt' => 'Trust']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">3.</span>
                    </div>
                    <div class="col-xs-10 t_left">Một cơ quan uy tín đã xác thực danh  tính  chủ  nhân  Website trước khi cấp chứng chỉ SSL</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-globe" aria-hidden="true"></i> Quy trình chứng thực Website đã được cấp</h2>
        <?= $this->Html->image('frontend/ssl-chungthuc.jpg', ['alt' => 'SSl']) ?>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">Làm thế nào để kiểm tra một SSL là có thực hay không? <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p>Khi Website gửi cho trình duyệt một chứng chỉ SSL, trình duyệt sẽ gửi chứng chỉ này đến một máy chủ lưu trữ các 
            chứng chỉ số đã được phê duyệt.</p>
        <p>Về mặt kỹ thuật, SSL sử dụng mã hóa công khai. Kỹ thuật này giúp cho Website và trình duyệt tự thỏa thuận (bước 4 ở hình trên) một bộ 
khóa sẽ dùng trong suốt quá trình trao đổi thông tin sau đó. Bộ khóa sẽ thay đổi theo mỗi trong lần giao dịch kế tiếp, một người khác sẽ 
không thể giải mã ngay cả khi có được dữ liệu của máy chủ lưu trữ chứng chỉ số nói trên.</p>
        <h2 class="mb30"><i class="fa fa-briefcase" aria-hidden="true"></i> Tại sao nên sử dụng SSL?</h2>
        <p>Bạn đăng ký domain để sử dụng các dịch vụ website, email v.v... -> luôn có những lỗ hổng bảo mật -> hacker tấn công -> 
            SSL bảo vệ website và khách hàng của bạn.</p>
        <p>Bảo mật dữ liệu: dữ liệu được mã hóa và chỉ người nhận đích thực mới có thể giải mã.</p>
        <p>Toàn vẹn dữ liệu: dữ liệu không bị thay đổi bởi tin tặc.</p>
        <p>Chống chối bỏ: đối tượng thực hiện gửi dữ liệu không thể phủ nhận dữ liệu của mình.</p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30">Lợi ích khi sử dụng SSL? <i class="fa fa-shield" aria-hidden="true"></i></h2>
        <p>Bạn đăng ký domain để sử dụng các dịch vụ website, email v.v… -> luôn có những lỗ hổng bảo mật -> hacker tấn công -> 
            SSL bảo vệ website và khách hàng của bạn.</p>
        <p>Bảo mật và mã hóa các thông điệp trao đổi giữa trình duyệt và server.</p>
        <p>Bảo mật các giao dịch giữa khách hàng và doanh nghiệp, các dịch vụ truy nhập hệ thống.</p>
        <p>Bảo mật webmail và các ứng dụng như Outlook Web Acess, Exchange, và Office Communication Server.</p>
        <p>Bảo mật các ứng dụng ảo hóa như Citrix Delivery Platform hoặc các ứng dụng điện toán mây.</p>
        <p>Bảo mật dịch vụ FTP.</p>
        <p>Bảo mật truy cập Control panel.</p>
        <p>Bảo mật các dịch vụ truyền dữ liệu trong mạng nội bộ, file sharing, extranet.</p>
        <p>Bảo mật VPN Access Servers, Citrix Access Gateway.</p>
        <p>Nâng cao hình ảnh, thương hiệu và uy tín doanh nghiệp.</p>
        <p>Tạo lợi thế cạnh tranh, tăng niềm tin của khách hàng đối với website, tăng số lượng giao dịch, giá trị giao dịch trực tuyến 
            của khách hàng. Website không được xác thực và bảo mật sẽ luôn ẩn chứa nguy cơ bị xâm nhập dữ liệu, dẫn đến hậu quả khách hàng 
            không tin tưởng sử dụng dịch vụ.</p>
    </div>
</div>

<div class="other-services">
    <div class="container">
        <span>Xem thêm <strong>dịch vụ khác</strong> kèm theo Hosting của bạn?</span>
        <a href="<?= $this->Url->build(['controller' => 'Order', 'action' => 'index']) ?>" class="btn" target="_blank">XEM CÁC DỊCH VỤ</a>
    </div>
</div><!--/.other-services-->