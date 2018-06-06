<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Email/rent.ctp with your own version.');
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
                        <h1>EMAIL DOANH NGHIỆP SERVER</h1>
                        <h3>Nhà cung cấp có nhiều năm kinh nghiệm triển khai dịch vụ Email</h3>
                        <p>Với dịch vụ Email doanh nghiệp, BKHOST là đơn vị tiên phong triển khai dịch vụ này. Email doanh nghiệp 
							nâng cao uy tín, khẳng định thương hiệu trên internet cho cá nhân và doanh nghiệp của bạn và Quản lý công việc
							của nhân viên hiệu quả, kiểm tra và điều chỉnh kịp thời khi cần thiết.</p>
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
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-virus.png', ['alt' => 'Virus']) ?></div>
                        <div class="pull-right">Hệ thống bảo mật chống Spam, Virus</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-money.png', ['alt' => 'Chi phí']) ?></div>
                        <div class="pull-right">Tiết kiệm chi phí, nâng cấp dễ dàng</div>
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
                <span>BKH-SV5</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Số lượng Email: 5 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Dung lượng: 10GB/05 email</strong></span></li>
                    <li>Giao diện: Webmail/ Outlook</li>
					<li>Phí khởi tạo: Miễn phí</li>
                    <li>Hỗ trợ: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>50K</span>/Tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=195" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-SV10</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Số lượng Email: 10 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Dung lượng: 25GB/10 email</strong></span></li>
                    <li>Giao diện: Webmail/ Outlook</li>
					<li>Phí khởi tạo: Miễn phí</li>
                    <li>Hỗ trợ: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>100K</span>/Tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=196" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BKH-SV20</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Số lượng Email: 20 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Dung lượng: 50GB/20 email</strong></span></li>
                    <li>Giao diện: Webmail/ Outlook</li>
					<li>Phí khởi tạo: Miễn phí</li>
                    <li>Hỗ trợ: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>180K</span>/Tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=196" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-SV50</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Số lượng Email: 50 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Dung lượng: 110GB/50 email</strong></span></li>
                    <li>Giao diện: Webmail/ Outlook</li>
					<li>Phí khởi tạo: Miễn phí</li>
                    <li>Hỗ trợ: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>480K</span>/Tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=197" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BKH-SV100</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Số lượng Email: Unlimited</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Dung lượng: 250GB</strong></span></li>
                    <li>Giao diện: Webmail/ Outlook</li>
					<li>Phí khởi tạo: 300K</li>
                    <li>Hỗ trợ: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>999 K</span>/Tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=198" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
		
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="email-benefit">
    <div class="container">
        <h3 class="block-title"><span>Lợi ích</span></h3>
        <div class="content">
            <div class="col-md-6"></div>
            <div class="col-md-6 pdb30">
                <h3>TĂNG NĂNG SUẤT KINH DOANH</h3>
                <p>Trong kinh doanh, thời gian là tiền bạc. Với dịch vụ Email doanh nghiệp 
của chúng tôi, nhân viên của bạn tiết kiệm thời gian bằng cách không phải để đối phó với các email Spam nữa, đem lại cho doanh nghiệp 
tăng năng suất tuyệt. BKHOST Tập trung vào những vấn đề quan trọng của bạn vì vậy chúng tôi dùng biện pháp bảo vệ hộp thư email của bạn.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content2">
            <div class="col-sm-6 pdb30">
                <h3>GỬI EMAIL BẢO MẬT DỮ LIỆU</h3>
                <p>Chính sách an ninh nghiêm ngặt của chúng tôi đảm bảo thông tin quan trọng của bạn là an toàn và an toàn. 
                    Chúng tôi thậm chí cung cấp cho bạn khả năng mã hóa kết nối email của bạn cho bảo mật email tối đa.</p>
            </div>
            <div class="col-sm-6"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="hosting-system email-system">
    <div class="container">
        <h3 class="block-title"><span>Chương trình bao gồm</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-malware.png', ['alt' => 'Hệ thống chống Virus']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống chống Virus</h3>
                        <p>Hệ thống quản lý chống Virus của chúng tôi sẽ bảo vệ doanh nghiệp của bạn chống lại các email lừa đảo, 
                            và email với virus phổ biến, trojan hoặc phần mềm độc hại.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>POP3 / IMAP / SMTP / Hỗ trợ WEBMAIL</h3>
                        <p>Kế hoạch lưu trữ email của chúng tôi hỗ trợ POP3, IMAP, SMTP và truy cập web, vì vậy bạn có thể sử dụng 
                            một trình duyệt hoặc phần mềm để quản lý email của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/an-toan-du-lieu.png', ['alt' => 'Hệ thống bảo mật dữ liệu']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống bảo mật dữ liệu</h3>
                        <p>Chính sách an ninh nghiêm ngặt của chúng tôi đảm bảo thông tin quan trọng của bạn là an toàn và an toàn. 
                            Bạn có thể mã hóa các kết nối email của bạn để bảo mật email tối đa.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-support.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>24/7 SuperSupport</h3>
                        <p>Tất cả dịch vụ của chúng tôi được quản lý bằng đội ngũ hỗ trợ liên tục 24/7. Có thể là thông qua email, 
                            điện thoại, livechat hoặc thậm chí giúp đỡ từ xa, Chúng tôi sẽ ở đó chờ bạn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="email-row email-row2">
    <div class="container">
        <h3 class="block-title"><span>Công nghệ cao cấp chống Virus và thư rác</span></h3>
        <?= $this->Html->image('frontend/he-thong-email-server-01.png', ['alt' => 'Email Server']) ?>
        <h4>Nền tảng di động được hỗ trợ</h4>
        <?= $this->Html->image('frontend/nen-tang-ho-tro.jpg', ['alt' => 'Platform']) ?>
    </div>
</div><!--/.email-row-->

<?= $this->element('other_services5') ?>