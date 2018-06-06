<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/wordpress.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="content-wrap">
                    <div class="content">
                        <h2>Hosting WordPress</h2>
                        <h3>Powerful hosting designed for WordPress</h3>
                        <p>WordPress hosting is specifically designed for websites that use open source WordPress for maximum speed and security. 
						Sign up and verify today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">The best factor of hosting wordpress</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-bo.jpg', ['alt' => 'Bảo mật']) ?></div>
                        <div class="pull-right">System against malicious codeConfigServer eXploit Scanner and Attack Local - Attack with CloudLinux OS</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-1click.png', ['alt' => '1 click']) ?></div>
                        <div class="pull-right">One-Click Easy to install Wordpress for your website and Free SSL with Let's Encrypt</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Weekly backups (Number of backups once a week)</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP01</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 750 MB</font></strong></li>
					<li><strong><font color="red">Bandwidth: 20 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 01</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 30 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>50K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=184" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 1,5 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: 50 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 02</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 30 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>80K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=185" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight">
            <div class="column-header">
                <span>BK-WP03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 2,5 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 04</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>140K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=186" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 4 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 06</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>190K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=187" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BK-WP05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 8 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 10</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>280K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=188" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/wordpress-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">See full technical information</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="content">
                    <h2>Why choose WordPress Hosting in BKHOST?</h2>
                    <p>As a Content Management System, WordPress is the world’s most popular website building system, that allows individuals 
					and businesses to create their website quickly and easily. WordPress provides you with the tools to start up your website, 
					with a multitude of themes and plugins available for you to customise and design that website that you need.</p>
                </div>
            </div>
            <div class="col-sm-5"><?= $this->Html->image('frontend/wp_host.png', ['alt' => 'WordPress Hosting']) ?></div>
        </div>
    </div>
</div><!--/.why-choose-->

<div class="hosting-system">
    <div class="container">
        <h3 class="block-title"><span>Our system includes</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Transfer and free installation </h3>
                        <p>Kỹ thuật của chúng tôi sẽ xử lý việc chuyển website từ máy chủ hiện tại của bạn. 
                            Chúng tôi sẽ giúp bạn về việc này hoàn toàn miễn phíOur technique will handle website transfer from your current server. It’s free.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Support 24/7 </h3>
                        <p>All our services are managed by 24/7 supports team. May be through email, phone, livechat or even remote assistance, 
						we will be there waiting for you</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Automatic remote data backup (files and folders)</h3>
                        <p>Lost data will be your biggest worry with our weekly remote backups. You will be assured of this, we will back up your 
						files and folders weekly (1 weekly - 1 copy </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-wp.png', ['alt' => 'WordPress']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Optimal support web Wordpress</h3>
                        <p>The service is specifically configured for website  use open source WordPress to achieve the highest speed and security.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email Hosting']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Email Hosting</h3>
                        <p>Email Hosting is Built-in featurn offers the ability to send and receive emails regularly to exchange work with 
						customers and partners with more professional style.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-soft.png', ['alt' => 'Soft']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>The system is compatible with multi-programming languages</h3>
                        <p>Hosting systems compatible with multi-programming languages are used for website development (PHP, ASP, ASP.NET, JSP...)</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-cpanel.png', ['alt' => 'Cpanel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Our system includes</h3>
                        <p>The system includes interface Cpanel and DirectAdmin are very popular, are very convenient to use. 
						You can select the appropriate interface in the steps to register the service.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-refund.png', ['alt' => 'Refund']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>If you are not satisfied, we’ll commitment to refund within 30 days</h3>
                        <p>For your peace of mind to choose and use the service, BKHOST is committed to the trial policy and will 
						reimburse the service fee within 30 days if you do not feel comfortable with us.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="additional-services">
    <?= $this->element('additional_services') ?>
</div><!--/.additional-services-->

<?= $this->element('other_services') ?>