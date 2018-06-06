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
                        <h1>Business email –google apps</h1>
                        <h3>Supplier have years of experience deploying email by domain</h3>
                        <p>With Email business – Google Apps, Bkhost is a pioneer in deploying business email services for companies,major corporations in the country, we deployed Google service packs with prestige quality is confirmed globally.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-email-02.png', ['alt' => 'Email']) ?></div>
                        <div class="pull-right">Raise the brand nhanvien@congty.vn</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-user.png', ['alt' => 'User']) ?></div>
                        <div class="pull-right">Manage email staff</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-google.png', ['alt' => 'Google']) ?></div>
                        <div class="pull-right">Google is a global authority</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ui.png', ['alt' => 'Giao diện']) ?></div>
                        <div class="pull-right">Simple interface</div>
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
                    <li><strong><span style="color: #E30613">Number of Email: 10 Email</strong></span></li>
                    <li>Storage: 15GB/1 User</li>
                    <li>Email management: have</li>
                    <li>Email sent / day: 500 / 1 User</li>
                    <li>2 layer security: have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>175 USD</span>/forever</div>
                <div class="promo-code">Register now<strong>today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=26" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-GA50</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Number of Email: 50 Email</strong></span></li>
                    <li>Storage: 15GB/1 User</li>
                    <li>Email management: have</li>
                    <li>Email sent / day: 500 / 1 User</li>
                    <li>2 layer security: have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>250 USD</span>/forever</div>
                <div class="promo-code">Register now<strong>today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=27" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BKH-GA100</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Number of Email: 100 Email</strong></span></li>
                    <li>Storage: 15GB/1 User</li>
                    <li>Email management: have</li>
                    <li>Email sent / day: 500 / 1 User</li>
                    <li>2 layer security: have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>345 USD</span>/forever</div>
                <div class="promo-code">Register now<strong>today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=28" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-GA200</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Number of Email: 200 Email</strong></span></li>
                    <li>Storage: 15GB/1 User</li>
                    <li>Email management: have</li>
                    <li>Email sent / day: 500 / 1 User</li>
                    <li>2 layer security: have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>450 USD</span>/forever</div>
                <div class="promo-code">Register now<strong>today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=29" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BKH-GA500</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><span style="color: #E30613">Number of Email: 500 Email</strong></span></li>
                    <li>Storage: 15GB/1 User</li>
                    <li>Email management: have</li>
                    <li>Email sent / day: 500 / 1 User</li>
                    <li>2 layer security: have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>845 USD</span>/forever</div>
                <div class="promo-code">Register now<strong>today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=30" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="email-features">
    <div class="container">
        <h3 class="block-title"><span>Features of Google Apps Email</span></h3>
        <div class="row">
            <div class="col-sm-4 mb30">
                <ul class="feature-list">
                    <li><span>1</span>Gmail</li>
                    <li><span>2</span>Calendar</li>
                    <li><span>3</span>Driver</li>
                    <li><span>4</span>Hangouts</li>
                </ul>
            </div>
            <div class="col-sm-8">
                <?= $this->Html->image('frontend/icon-gmail.png', ['alt' => 'Gmail', 'class' => 'fl mr10 mb10']) ?>
                <p>+ Google is the world's largest corporation providing Business Email service quality and the most stable.</p>
                <p>+ Business email, also known as corporate email, expresses the brand and creates professionalism for the unit(Example: Staff's name@corporate name.com</p>
                <p>+ Manage all staff  Email, such as: Create, edit email name, delete, change password, suspend account</p>
				<p>+ Your email sent 100% into customer Inbox</p>
				<p>+ Register only once and use forever without renewal</p>
				<p>+ BKHOST 24/7 technical support</p>
				
				
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
                        <h3>Email name by corporate domain name:</h3>
                        <p>Install and manage staff email by business domain: <span style="color: #bf1718">name@namecompany.com</span></p>
                    </div>
                </div>
                <div class="row mb50">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-mobile.png', ['alt' => 'Giải pháp linh hoạt, di động']) ?></div>
                    <div class="col-xs-10">
                        <h3>Flexible solution</h3>
                        <p>You can connect to the mail box from anywhere, any smart mobile devices & anytime with just an Internet connection</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 t_center"><?= $this->Html->image('frontend/icon-one-bkhost.png', ['alt' => 'Chuyển đổi dễ dàng']) ?></div>
                    <div class="col-xs-10">
                        <h3>Easy conversion</h3>
                        <p>convert quickly data from any system to Google Apps Mail Servers.</p>
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
                </div>
            </div>
            <div class="col-sm-5 mb50 hidden-xs">
                <?= $this->Html->image('frontend/mobile-ipad-bkhost.png', ['alt' => 'iPad Bkhost']) ?>
            </div>
        </div>
    </div>
</div><!--/.email-row-->

<?= $this->element('other_services5') ?>