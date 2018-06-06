<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Order/index.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/buy-bkhost.png', ['alt' => 'Buy']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>Đặt hàng thuận lợi hơn với dịch vụ chúng tôi</h1>
                        <p><strong>Trải nghiệm tại sao hàng ngàn khách hàng giới thiệu dịch vụ của chúng tôi!</strong><br/>
                        Đơn giản chỉ cần click vào nút bên dưới để đăng ký, và bạn sẽ có những thông tin để quản lý tài khoản 
                        dịch vụ gửi đến cho bạn rất lâu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="home-services order-services">
    <div class="container">
        <h3 class="block-title"><span>Dịch vụ Web Hosting</span></h3>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/hosting-personal.jpg', ['alt' => 'Hosting']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">HOSTING CÁ NHÂN</h2>
                    </div>
                    <div class="body">
                        <p class="description">Giá cả phải chăng, khởi tạo nhanh chóng dịch vụ và được hỗ trợ bởi SuperSupport 24/7 của chúng tôi.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giá cả phải chăng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Dễ dàng nâng cấp và hạ cấp</p>
                        <div class="price"><span>Bắt đầu từ</span>23.5k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/hosting/personal">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/hosting-business.jpg', ['alt' => 'Hosting doanh nghiệp']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">HOSTING DOANH NGHIỆP</h2>
                    </div>
                    <div class="body">
                        <p class="description">Thưởng thức web cực nhanh với các tính năng cao cấp.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Flash ổ lưu trữ (SSD)</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Chuyên dụng IP, SSL và hơn thế nữa</p>
                        <div class="price"><span>Bắt đầu từ</span>100k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/hosting/business">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/hosting-wordpress.jpg', ['alt' => 'Hosting WordPress']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">HOSTING WORDPRESS</h2>
                    </div>
                    <div class="body">
                        <p class="description">Bắt đầu trang web của bạn được tối ưu hóa với Hosting WordPress cung cấp bởi BKHOST</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tối ưu hóa cho bảo mật & Hiệu xuất</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Miễn phí cao cấp Themes & Plugins</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tối ưu hóa khi chạy nền WordPress</p>
                        <div class="price"><span>Bắt đầu từ</span>50k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/hosting/wordpress">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.order-services-->

<div class="home-services order-services email-services">
    <div class="container">
        <h3 class="block-title"><span>Dịch vụ Email doanh nghiệp</span></h3>
        <div class="row">
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-vps.jpg', ['alt' => 'Email doanh nghiệp']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">EMAIL DOANH NGHIỆP - MUA 1 LẦN</h2>
                    </div>
                    <div class="body">
                        <p class="description">Đăng ký mua 1 lần duy nhất và sử dụng vĩnh viễn mà không phải duy trì hàng tháng - 
                            Email doanh nghiệp làm nổi bật thương hiệu khi giao dịch với khách hàng qua email (Email: tennhanvien@tendoanhnghiep.com)</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> 99,9% Đảm bảo Uptime</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tiết kiệm chi với nhưng đem lại lợi ích cao</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giao diện thân thiện như Gmail</p>
                        <div class="price"><span>Bắt đầu từ</span>3.5 triệu/Vĩnh viễn</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/email">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-email.jpg', ['alt' => 'Email doanh nghiệp']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">EMAIL DOANH NGHIỆP - THUÊ THEO THÁNG</h2>
                    </div>
                    <div class="body">
                        <p class="description">Chi phí đầu tư ban đầu phù hợp với nhiều doanh nghiệp, tiện lợi trong quá trình nâng cấp 
                            số lượng email theo mong muốn, tính năn linh hoạt trong quá trình sử dụng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giao dịch email đạt chất lượng tuyệt đối</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ kỹ thuật suốt đời</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> 99,9% Đảm bảo Uptime</p>
                        <div class="price"><span>Bắt đầu từ</span>100k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/email">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.email-services-->

<div class="home-services order-services domain-services">
    <div class="container">
        <h3 class="block-title"><span>Đăng ký tên miền</span></h3>
        <div class="row">
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/domain-global.jpg', ['alt' => 'Tên miền']) ?>
                        <h3 class="small-title">Hãy lựa chọn tên miền</h3>
                        <h2 class="title">TÊN MIỀN</h2>
                    </div>
                    <div class="body">
                        <p class="description">Nhận tên miền chuyên nghiệp mà bạn lựa chọn, tên miền này sẽ được hiện diện trên Internet ngay bây giờ.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Được bảo vệ quyền sở hữu</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Quản lý bảo mật tối đa</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Cập nhật DNS nhanh nhất</p>
                        <div class="price"><span>Bắt đầu từ</span>250k/năm</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/domain">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/domain-vn.png', ['alt' => 'Bảng giá']) ?>
                        <h3 class="small-title">Bảng giá</h3>
                        <h2 class="title">BẢNG GIÁ TÊN MIỀN VIỆT NAM VÀ QUỐC TẾ</h2>
                    </div>
                    <div class="body">
                        <p class="description">BKHOST công bố bảng giá minh bạch để bạn có thể tham khảo quyết định trước khi đăng ký dịch vụ của chúng tôi</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giá cả phải chăng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Khởi tạo nhanh chóng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Thủ tục đơn giản</p>
                        <div class="price"><span>Bắt đầu từ</span>250k/năm</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/domain">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.domain-services-->

<div class="home-services order-services vps-services">
    <div class="container">
        <h3 class="block-title"><span>Cloud VPS SSD</span></h3>
        <div class="row">
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-server.jpg', ['alt' => 'Cloud VPS SSD']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">CLOUD VPS SSD</h2>
                    </div>
                    <div class="body">
                        <p class="description">Với nhiều gói dịch vụ Cloud VPS SSD đang dạng, phù hợp với nhu cầu sử dụng của bạn.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Ổ đĩa lưu trữ SSD</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tài nguyên VPS độc lập</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> 99,9% Đảm bảo Uptime</p>
                        <div class="price"><span>Bắt đầu từ</span>200k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/server">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/cloud-vps.jpg', ['alt' => 'Cloud VPS SSD']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">HỆ THỐNG CLOUD VPS SSD TẠI BKHOST</h2>
                    </div>
                    <div class="body">
                        <p class="description">Cơ sở hạn tầng hệ thống Cloud VPS SSD sẽ đam đến dịch vụ tốt nhất cho bạn</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Bảo vệ dữ liệu quan trọng </p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Nhanh phục hồi khi sự cố</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tăng cường dịch vụ Backup dữ liệu</p>
                        <div class="price">&nbsp;</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/server/cloud-vps">Tìm hiểu ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.vps-services-->

<div class="home-services order-services server-services">
    <div class="container">
        <h3 class="block-title"><span>Máy chủ và chỗ đặt</span></h3>
        <div class="row">
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-server.jpg', ['alt' => 'Server']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">THUÊ MÁY CHỦ VẬT LÝ</h2>
                    </div>
                    <div class="body">
                        <p class="description">Cho thuê máy chủ vật lý đạt hiệu xuất cao trong quá trình sử dụng dịch vụ.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Quyền kiểm soát toàn quyền máy chủ của bạn</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> 99,9% Đảm bảo Uptime</p>
                        <div class="price"><span>Bắt đầu từ</span>2,45 triệu/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/server">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/cloud-vps.jpg', ['alt' => 'Cloud VPS SSD']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">THUÊ CHỖ ĐẶT MÁY CHỦ</h2>
                    </div>
                    <div class="body">
                        <p class="description">Không gian chỗ đặt máy chủ BKHOST luôn sẵn sàng cho bạn, Hệ thống Data-center đạt chuẩn Quốc tế Tier 3.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giá cả siêu hợp lý</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Công cụ KVM linh hoạt điều khiển Server</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <div class="price"><span>Bắt đầu từ</span>1.5 triệu/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/server">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.server-services-->

<div class="home-services order-services ssl-services">
    <div class="container">
        <h3 class="block-title"><span>Bảo mật SSL và Phần mềm</span></h3>
        <div class="row">
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-server.jpg', ['alt' => 'SSL']) ?>
                        <h3 class="small-title">Chứng chỉ bảo mật</h3>
                        <h2 class="title">SSL</h2>
                    </div>
                    <div class="body">
                        <p class="description">Bằng cách sử dụng giấy chứng nhận SSL web, bạn có thể giúp mã hóa thông tin của khách hàng trước khi nó được gửi qua Internet, 
						bảo vệ lợi ích của họ và thúc đẩy sự tự tin của họ trong trang web của bạn.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Mã hóa các giao dịch trực tuyến của bạn</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Mã hóa dữ liệu lên đến 256-bit</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Bảo vệ khỏi lừa đảo và lừa đảo</p>
                        <div class="price"><span>Bắt đầu từ</span>250k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/software/ssl">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('menu/cloud-vps.jpg', ['alt' => 'Phần mềm']) ?>
                        <h3 class="small-title">Phần mềm hệ thống</h3>
                        <h2 class="title">DANH SÁCH PHẦN MỀM BẢN QUYỀN</h2>
                    </div>
                    <div class="body">
                        <p class="description">Chúng tôi cung cấp những phần mềm chuyên biệt dành riêng cho VPS và Server vật lý.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Đơn giá phải chăng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Khởi tạo nhanh gọn</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Bảo mật thông tin phần mềm</p>
                        <div class="price"><span>Bắt đầu từ</span>250k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?php echo SITE_URL; ?>/software">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.ssl-services-->

<div class="hosting-system additional-info">
    <div class="container">
        <h3 class="block-title"><span>Thông tin bổ sung</span></h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'SSL']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Trang web của chúng tôi được bảo mật bằng 256 bit SSL Certificate</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Speed']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Hệ thống chúng tôi luôn hoạt động 99.9%</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-refund.png', ['alt' => 'Refund']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Chúng tôi Backup dữ liệu của bạn theo định kỳ 1 bản / 7 ngày và lưu trong 30 ngày</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Để đối soát với dịch vụ bạn yêu cầu hỗ trợ hoặc khởi tạo chúng tôi sẽ lưu lại toàn bộ IP của bạn trong quá trình giao dịch</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Xin vui lòng gọi đường dây nóng của chúng tôi: 0984 131 161. Nếu bạn gặp bất kỳ vấn đề gì trong quá trình đăng ký</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3">
                        <?= $this->Html->image('frontend/icon-text.png', ['alt' => 'Văn bản']) ?>
                    </div>
                    <div class="col-sm-8 col-xs-9">
                        <p>Bạn hay luôn ủng hộ bởi những điều khoản và chính sách của chúng tôi đưa ra khi dịch vụ bạn được kích hoạt</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->