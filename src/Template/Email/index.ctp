<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Email/index.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro email-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/email-doanh-nghiep-01.png', ['alt' => 'Email doanh nghiệp']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>EMAIL DOANH NGHIỆP - GOOGLE APPS</h1>
                        <h3>Nhà cung cấp có nhiều năm kinh nghiệm triển khai email theo tên miền</h3>
                        <p>Với dịch vụ Email doanh nghiệp Google Apps, BKHOST là đơn vị tiên phong triển khai các dịch vụ email doanh nghiệp cho các 
                            công ty, tập đoàn lớn trong cả nước, chúng tôi triển khai các gói dịch vụ Email Google Apps của Google với 
                            chất lượng uy tín được khẳng định trên toàn cầu.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-email-02.png', ['alt' => 'Email']) ?></div>
                        <div class="pull-right">Nâng tầm thương hiệu nhanvien@congty.vn</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-user.png', ['alt' => 'User']) ?></div>
                        <div class="pull-right">Quyền quản lý email nhân viên</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-google.png', ['alt' => 'Google']) ?></div>
                        <div class="pull-right">Google là đơn vị uy tín toàn cầu</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ui.png', ['alt' => 'Giao diện']) ?></div>
                        <div class="pull-right">Giao diện đơn giản dễ sử dụng</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="hosting-columns email-pkgs">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-GA10</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Số lượng Email: 10 Email</strong></span></li>
                    <li>Lưu trữ: 15GB/1 User</li>
                    <li>Quản lý email nhân viên: Có</li>
                    <li>Email gửi / ngày: 500 / 1 User</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>3.5 triệu</span>/Vĩnh viễn</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-10%) - Từ 02/12 - 30/12/2017<strong>BKMT810</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=26" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-GA50</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Số lượng Email: 50 Email</strong></span></li>
                    <li>Lưu trữ: 15GB/1 User</li>
                    <li>Quản lý email nhân viên: Có</li>
                    <li>Email gửi / ngày: 500 / 1 User</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>5 triệu</span>/Vĩnh viễn</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-10%) - Từ 02/12 - 30/12/2017<strong>BKMT810</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=27" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BKH-GA100</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Số lượng Email: 100 Email</strong></span></li>
                    <li>Lưu trữ: 15GB/1 User</li>
                    <li>Quản lý email nhân viên: Có</li>
                    <li>Email gửi / ngày: 500 / 1 User</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>6.9 triệu</span>/Vĩnh viễn</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-10%) - Từ 02/12 - 30/12/2017<strong>BKMT810</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=28" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-GA200</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Số lượng Email: 200 Email</strong></span></li>
                    <li>Lưu trữ: 15GB/1 User</li>
                    <li>Quản lý email nhân viên: Có</li>
                    <li>Email gửi / ngày: 500 / 1 User</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>9 triệu</span>/Vĩnh viễn</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-10%) - Từ 02/12 - 30/12/2017<strong>BKMT810</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=29" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BKH-GA500</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Số lượng Email: 500 Email</strong></span></li>
                    <li>Lưu trữ: 15GB/1 User</li>
                    <li>Quản lý email nhân viên: Có</li>
                    <li>Email gửi / ngày: 500 / 1 User</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>18 triệu</span>/Vĩnh viễn</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-10%) - Từ 02/12 - 30/12/2017<strong>BKMT810</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=30" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="email-features">
    <div class="container">
        <h3 class="block-title"><span>Những lý do nên dùng Email Doanh Nghiệp - Google Apps?</span></h3>
        <div class="row">
            <div class="col-sm-4 mb30">
                <?= $this->Html->image('frontend/bkhost-gmail.png', ['alt' => 'Gmail',]) ?>
<!--                <ul class="feature-list">
                    <li><span>1</span>Gmail</li>
                    <li><span>2</span>Lịch</li>
                    <li><span>3</span>Driver</li>
                    <li><span>4</span>Hangouts</li>
                </ul>-->
            </div>
            <div class="col-sm-8">
                <?= $this->Html->image('frontend/icon-gmail.png', ['alt' => 'Gmail', 'class' => 'fl mr10 mb10']) ?>
                <p>+ <span style="color: #bf1718"><Strong>Google là tập đoàn lớn nhất thế giới </Strong></span>cung cấp dịch vụ Email Doanh Nghiệp và có chất lượng ổn định nhất hiện nay.</p>
                <p>+ Email Doanh Nghiệp hay còn gọi là email công ty thể hiện <span style="color: #bf1718"><Strong>thương hiệu và tạo sự chuyên nghiệp cho đơn vị (Ví dụ: tennhanvien@tendoanhnghiep.com)</Strong></span></p>
                <p>+ <span style="color: #bf1718"><Strong>Có quyền quản lý tất cả các Email nhân viên của công ty như:</Strong></span> Quyền tạo, sửa tên email, xóa, đổi mật khẩu, tạm dừng tài khoản...</p>
				<p>+ Email Quý khách chuyển đi <span style="color: #bf1718"><Strong>100% vào Inbox </Strong></span>của khách hàng...</p>
				<p>+ Giao diện và các tính năng giống như Gmail</p>
				<p>+ Đăng ký chỉ 1 lần và <span style="color: #bf1718"><Strong>sử dụng mãi mãi</Strong></span> mà không cần gia hạn </p>
				<p>+ BKHOST hỗ trợ kỹ thuật 24/7 vĩnh viễn</p>
            </div>
        </div>
    </div>
</div><!--/.email-features-->

<div class="email-row email-row1">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mb50 hidden-xs">
                <?= $this->Html->image('frontend/mobile-bkhost.png', ['alt' => 'Mobile Bkhost']) ?>
            </div>
            <div class="col-sm-7 mb50">
                <div class="row mb50">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-img.png', ['alt' => 'Email theo tên miền công ty']) ?></div>
                    <div class="col-xs-10">
                        <h3>Email theo tên miền công ty</h3>
                        <p>Cài đặt và quản lý email nhân viên theo tên miền của doanh nghiệp. Ví dụ: <span style="color: #bf1718">ho.ten@congty.com</span></p>
                    </div>
                </div>
                <div class="row mb50">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-mobile.png', ['alt' => 'Giải pháp linh hoạt, di động']) ?></div>
                    <div class="col-xs-10">
                        <h3>Giải pháp linh hoạt, di động</h3>
                        <p>Bạn có thể kết nối với hộp mail ở bất kì đâu, bất kì thiết bị di động thông minh & bất kì lúc nào chỉ với kết nối Internet.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-one-bkhost.png', ['alt' => 'Chuyển đổi dễ dàng']) ?></div>
                    <div class="col-xs-10">
                        <h3>Chuyển đổi dễ dàng</h3>
                        <p>Chuyển đổi nhanh chóng dữ liệu từ bất kỳ hệ thống Mail Server nào sang Google Apps. Không gián đoạn, mất mail,... ảnh hưởng tới công việc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.email-row.email-row1-->

<div class="email-row">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 mb50">
                <div class="row mt60 mb60">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-stats.png', ['alt' => 'Tiết kiệm chi phí']) ?></div>
                    <div class="col-xs-10">
                        <h3>Tiết kiệm chi phí</h3>
                        <p>Chỉ từ 3.500.000đ, không chi phí ẩn, phụ phí: thiết lập, chi phí nhân sự, chi phí rủi ro,...</p>
                    </div>
                </div>
                <div class="row mb60">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-led.png', ['alt' => 'Luôn luôn đổi mới']) ?></div>
                    <div class="col-xs-10">
                        <h3>Luôn luôn đổi mới</h3>
                        <p>Các ứng dụng hàng đầu của thế giới sẽ được Google cập nhật miễn phí nhằm hỗ trợ doanh nghiệp của bạn. Nâng cao sức sáng tạo và hiệu quả.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-comments.png', ['alt' => 'Hỗ trợ tận tình']) ?></div>
                    <div class="col-xs-10">
                        <h3>Hỗ trợ tận tình</h3>
                        <p>Đội ngũ hỗ trợ viên & kỹ thuật viên của BKHOST, cùng bộ phận hỗ trợ của Goolge 24/7 luôn sẵn sàng khi bạn cần.</p>
                    </div>
		<p><span style="color: #ffffff">Các từ khóa liên quan đến dịch vụ: email theo tên miền, email theo tên miền công ty, email theo ten mien google, email theo tên miền google
		gmail cho cong ty, gmail cho cong ty, gmail cong ty, gmail công ty, gmail cho doanh nghiep, gmail cho doanh nghiệp, gmail doanh nghiep, gmail doanh nghiệp,
		mail cho doanh nghiep, mail cho doanh nghiệp, mail cong ty, mail công ty, mail google app, email google apps, email tên miền, email ten mien,
		email ten mien rieng, email tên miền riêng, email theo ten mien, email cong ty, email doanh nghiệp gmail, email doanh nghiệp google</p>
                </div>
            </div>
		<p><span style="color: #ffffff">Các từ khóa tìm kiếm dịch vụ email doanh nghiep đó là: dịch vụ email cho doanh nghiệp, dịch vụ email doanh nghiệp, email cho công ty, email cho doanh nghiệp
		email cho tên miền, email công ty</p>
            <div class="col-sm-5 mb50 hidden-xs">
		                <?= $this->Html->image('frontend/mobile-ipad-bkhost.png', ['alt' => 'iPad Bkhost']) ?>
            </div>
		
        </div>

    </div>
</div><!--/.email-row-->

<?= $this->element('other_services5') ?>