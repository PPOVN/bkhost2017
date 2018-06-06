<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden"><?= $title ?></h1>
<div class="domain-checker-box">
    <div class="container">
        <span class="person"></span>
        <h3>Tìm <strong>Tên miền</strong> cho Website của bạn</h3>
        <?= $this->element('domain_search_box') ?>
    </div>
</div><!--/.domain-checker-box-->

<div class="overview">
    <div class="container">
        <div class="wrap">
            <?= $this->Html->image('frontend/overview.png', ['alt' => 'Tổng quan']) ?>
            <a class="chungtoi" data-title="Đội Super Support 24/7 luôn hỗ trợ bạn bất kì thời gian nào!"></a>
            <a class="hardware" data-title="Hệ thống máy chủ hiệu xuất cao cho bạn dịch vụ tốt nhất!"></a>
            <a class="software" data-title="Tăng cường bảo mật, tốc độ tối đa cho trang web và email của bạn!"></a>
            <a class="network" data-title="DataCenter luôn đem đến tốc độ tối đa và hoạt động thời gian 99.9%!"></a>
            <span class="txt bold"></span>
        </div>
    </div>
</div><!--/.overview-->

<div class="home-services">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-hosting.jpg', ['alt' => 'Hosting']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">Web Hosting</h2>
                    </div>
                    <div class="body">
                        <p class="description">Giá cả phải chăng, setup Website nhanh chóng và được hỗ trợ bởi Super Support 24/7 của chúng tôi.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Giá cả phải chăng</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Dễ dàng nâng cấp và hạ cấp</p>
                        <div class="price"><span>Bắt đầu từ</span>23.5k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>">Xem Web Hosting</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-email.jpg', ['alt' => 'Email doanh nghiệp']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">Email doanh nghiệp</h2>
                    </div>
                    <div class="body">
                        <p class="description">BKHOST là đơn vị tiên phong xây dựng hệ thống Email doanh nghiệp, hỗ trợ đầy đủ các yêu cầu phức tạp nhất.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Dịch vụ Email doanh nghiệp tin cậy</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Chống Virus và Spam</p>
                        <div class="price"><span>Bắt đầu từ</span>3.5 triệu/vĩnh viễn</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">Xem Email Doanh Nghiệp</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-vps.jpg', ['alt' => 'Cloud VPS']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">Cloud VPS SSD</h2>
                    </div>
                    <div class="body">
                        <p class="description">Hệ thống Cloud VPS SSD của chúng tôi luôn đem lại hiệu xuất tuyệt đối cho dịch vụ của bạn.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Công nghệ Cloud SSD</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Khả năng tùy biến cao</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tài nguyên chuyên dụng</p>
                        <div class="price"><span>Bắt đầu từ</span>200k/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudVps']) ?>">Xem Cloud VPS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-server.jpg', ['alt' => 'Thuê Server Riêng']) ?>
                        <h3 class="small-title">Quản lý hoàn toàn</h3>
                        <h2 class="title">Thuê Server Riêng</h2>
                    </div>
                    <div class="body">
                        <p class="description">Dedicated Server là dịch vụ cho thuê Server vật lý riêng, Quý khách sẽ sở hữu phần cứng Server và toàn quyền quản lý.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Công nghệ phần cứng IBM, Dell, HP...</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hỗ trợ 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Tùy biến trong việc nâng cấp</p>
                        <div class="price"><span>Bắt đầu từ</span>2.45 triệu/tháng</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'index']) ?>">Xem Server Riêng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.home-services-->

<div class="container hidden-xs">
    <div class="home-slider">
        <!-- Unordered list representing the tabs -->
        <ul>
            <li><a href="#slide1">Con người BKHOST</a></li>
            <li><a href="#slide2">Khuyến mại tháng 12</a></li>
            <li><a href="#slide3">Chương trình từ thiện 2017</a></li>
            <li><a href="#slide4">BKHOST Cam kết</a></li>
        </ul>

        <!-- Afterwards, include the div panels representing the panels of our slider -->
        <div id="slide1">
            <?= $this->Html->image('slider/slide1.jpg', ['alt' => 'Con người BKHOST']) ?>
        </div>
        <div id="slide2">
            <?= $this->Html->image('slider/slide2.png', ['alt' => 'Khuyến mại tháng 5']) ?>
        </div>
        <div id="slide3">
            <?= $this->Html->image('slider/slide3.jpg', ['alt' => 'Chương trình từ thiện 2016']) ?>
        </div>
        <div id="slide4">
            <?= $this->Html->image('slider/slide4.jpg', ['alt' => 'BKHOST Cam kết']) ?>
        </div>
    </div><!--/.home-slider-->
</div>

<div class="certificate">
    <div class="container">
        <h3 class="block-title"><span>Chứng nhận</span></h3>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="feedbacks">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="content">Mình đã đăng ký và sử dụng dịch vụ hosting bên BKHOST cảm thấy rất tốt, 
                                tốc độ load nhanh và ổn định, support cũng nhanh chóng qua ticket không quá 15 phút. 
                                Cảm ơn các bạn đã hỗ trợ cho tôi, vì vậy tôi rất tin dùng dịch vụ của bên bạn. Xin cảm ơn!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Nguyễn Văn Thắng</h3>
                                    <em>Công ty PPO Việt Nam</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">Xem thông tin bản quyền</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                        <div class="item">
                            <div class="content">Tôi đã dùng và chuyển rất nhiều nhà cung cấp Hosting thì mới chọn được
							công ty BKHOST, tôi thấy dịch vụ tại bên này chạy rất ổn định, điều đặc biệt là dịch vụ chăm sóc khách hàng
							hỗ trợ rất nhanh. Đây là địa chỉ cuối cùng tôi sẽ mở rộng thêm dịch vụ. Cảm ơn BKHOST nhé!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Trần Nguyên Văn</h3>
                                    <em>Nhân viên Trường Quốc tế Newton</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">Xem thông tin bản quyền</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div><!--/.feedbacks-->
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="cf mb30">
                    <div class="row">
                        <div class="col-md-6 col-xs-4"><span class="num">95%</span></div>
                        <div class="col-md-6 col-xs-8">
                            <h4>Sự hài lòng Hỗ trợ dịch vụ</h4>
                            <em>(Tháng 11 năm 2017)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="cf">
                    <div class="row">
                        <div class="col-md-6 col-xs-4"><span class="num">5000+</span></div>
                        <div class="col-md-6 col-xs-8">
                            <h4>Khách hàng tin dùng</h4>
                            <em>(Dịch vụ uy tín)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->element('contact_highlight') ?>

<?php echo $this->Html->script('slider-tabs/jquery.sliderTabs.min.js', ['type' => 'text/javascript', 'block' => true]); ?>
<?php echo $this->Html->script('jquery.hoverIntent.js', ['type' => 'text/javascript', 'block' => true]); ?>