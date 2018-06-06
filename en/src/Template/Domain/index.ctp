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
                        <h2>Search domain name for your website</h2>
                        <p>Check domain name here with a simple tool. We can help you find as many domains you want! After registering domain name you can also buy hosting from us!</p>
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
                <p>The most common domain name to create your brand</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>13 USD</span>1 Year</div>
                <div class="promo-code">Register<strong>Now</strong></div>
                <a href="#" class="btn btn-warning">Register</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.org</span>
            </div>
            <div class="column-body">
                <p>The most common domain name to create your brand</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>14 USD</span>1 Year</div>
                <div class="promo-code">Register<strong>Now</strong></div>
                <a href="#" class="btn btn-warning">Register</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.vn</span>
            </div>
            <div class="column-body">
                <p>The most common domain name to create your brand</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>42 USD</span>1 Year</div>
                <div class="promo-code">Register <strong>Now</strong></div>
                <a href="#" class="btn btn-warning">Register</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>.com.vn</span>
            </div>
            <div class="column-body">
                <p>The most common domain name to create your brand</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>35 USD</span>1 Year</div>
                <div class="promo-code">Register<strong>Now</strong></div>
                <a href="#" class="btn btn-warning">Register</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>.edu.vn</span>
            </div>
            <div class="column-body">
                <p>The most common domain name to create your brand</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>28 USD</span>1 Year</div>
                <div class="promo-code">Register <strong>Now</strong></div>
                <a href="#" class="btn btn-warning">Register</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="hosting-system system-features domain-features">
    <div class="container">
        <h3 class="block-title"><span>Features</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-dns.png', ['alt' => 'Quản lý DNS']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Management DNS</h3>
                            <p>Update domain name information easily with our system.</p>
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
                            <h3>Automatic Extend</h3>
                            <p>Don’t worry about losing your precious domain with our auto-renew system!</p>
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
                            <h3>PROM EMAIL ADDRESS</h3>
                            <p>Get aliases for your branded email address!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Register nhanh']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Quick registration process</h3>
                            <p>Your domain registration process will be simply, fast but highly secured domain name ownership.</p>
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