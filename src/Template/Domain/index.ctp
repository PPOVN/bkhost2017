<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/index.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="domain-checker-box domain-intro">
    <div class="container">
        <div class="domain-intro-wrap">
            <div class="domain-intro-wrap1">
                <span class="person"></span>
                <div class="row txt">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h2>Tìm Tên miền cho Website của bạn</h2>
                        <p>.Com/ .Net: 99 K (giá cũ 250 K) - .Vn: 750K (giá cũ 830 K) - .Xyz: 18K (giá cũ 280 K) - .Info/.Link: 59K (giá cũ 226K) - .Top/.Online: 29K (giá cũ 615K) </p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <?= $this->element('domain_search_box') ?>
            </div>
        </div>
    </div>
</div><!--/.domain-checker-box-->

<div class="hosting-columns domain-pkgs">
    <div class="container">
        <div class="hosting-column hosting-column-highlight domain-column-highlight">
            <div class="column-header">
                <span>.com</span>
            </div>
            <div class="column-body">
                <p>Tên miền phổ biển nhất để tạo thương hiệu của bạn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>99K</span>1 năm</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.net</span>
            </div>
            <div class="column-body">
                <p>Tên miền phổ biển nhất để tạo thương hiệu của bạn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>99K</span>1 năm</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.vn</span>
            </div>
            <div class="column-body">
                <p>Tên miền phổ biển nhất để tạo thương hiệu của bạn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>750K</span>1 năm</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.com.vn</span>
            </div>
            <div class="column-body">
                <p>Tên miền phổ biển nhất để tạo thương hiệu của bạn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>630K</span>1 năm</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>.edu.vn</span>
            </div>
            <div class="column-body">
                <p>Tên miền phổ biển nhất để tạo thương hiệu của bạn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>630K</span>1 năm</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="hosting-system system-features domain-features">
    <div class="container">
        <h3 class="block-title"><span>TÍNH NĂNG</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-dns.png', ['alt' => 'Quản lý DNS']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>QUẢN LÝ DNS</h3>
                            <p>Cập nhật thông tin tên miền một cách dễ dàng bằng hệ hống của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-renew.png', ['alt' => 'Gia hạn']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>TỰ ĐỘNG GIA HẠN</h3>
                            <p>Đừng lo lắng về việc mất miền quý giá bằng hệ thống tự động cập nhật!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>ĐỊA CHỈ EMAIL CHUYÊN NGHIỆP</h3>
                            <p>Có bí danh địa chỉ email giới thiệu tên thương hiệu của bạn!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Đăng ký nhanh']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>THỦ TỤC ĐĂNG KÝ NHANH GỌN</h3>
                            <p>Thủ tục đăng ký tên miền của bạn sẽ được triển khai đơn giản, nhanh gọn nhưng bảo mật cao quyền sở hữu tên miền.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>

<?php
// Append into the 'script' block.
$this->Html->scriptStart(['block' => true]);
?>
<!--<script type="text/javascript">-->
    var viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(window.location.hash.length > 0 && window.location.hash.indexOf('&') === -1 && 
        window.location.hash.indexOf('=') === -1 && jQuery(window.location.hash).length > 0){
        if(viewport_width > 991){
            jQuery('body,html').animate({
                scrollTop: jQuery(window.location.hash).offset().top
            }, 400);
        } else {
            jQuery('body,html').animate({
                scrollTop: jQuery(window.location.hash).offset().top - 50
            }, 400);
        }
        window.history.pushState("", document.title, window.location.pathname);
    }
<!--</script>-->
<?php $this->Html->scriptEnd(); ?>