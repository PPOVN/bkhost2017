<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/personal.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="row">
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-11 col-sm-12">
                <div class="content-wrap">
                    <div class="content">
                        <h2>Personal Hosting</h2>
                        <h3>Great Prices, set up web quickly and supported by our Support 24/7.</h3>
                        <p>At a resonable cost  always suitable for personal website to buy our cheap hosting in the early stages development, 
						however the service is always bringing the highest performance and we guarantee to refund 30 days if you are not satisfied 
						with the service.We believe BKHOST is the perfect choose for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">The best factor of personal hosting</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-bo.jpg', ['alt' => 'Bảo mật']) ?></div>
                        <div class="pull-right">System against malicious code ConfigServer Exploit Scanner and Attack Local - Attack with CloudLinux OS</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-code.jpg', ['alt' => 'Code']) ?></div>
                        <div class="pull-right">Many PHP versions for Website Php 5.2 through 7.0 and Free SSL with Let's Encrypt</div>
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
                <span>START</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong><font color="red">Disk space SSD: 700 MB</font></strong></li>
					<li><strong><font color="red">Bandwidth: 20 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 01</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 5 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong>Management interface:</strong> Cpanel</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>23,5K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%) <strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=10" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>START PLUS</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Disk space SSD: 1 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: 50 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 02</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 10 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong>Management interface:</strong> Cpanel</li>
					<li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>40K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=11" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight">
            <div class="column-header">
                <span>SILVER</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Disk space SSD: 2 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 03</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong>Management interface:</strong> Cpanel</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>80,5K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=12" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>SILVER PLUS</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Disk space SSD: 3 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 04</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong>Management interface:</strong> Cpanel</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
               <div class="price"><span>125K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=13" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>GOLD</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Disk space SSD: 10 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 06</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong>Management interface:</strong> Cpanel</li>
                    <li><strong>Backup:</strong> 1 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>165K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=14" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/personal-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">See full technical information</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

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
                        <p>Our technique will handle website transfer from your current server. It’s free.</p>
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
                        <p>All our services are managed by 24/7 supports team. May be through email, phone, 
						livechat or even remote assistance, we will be there waiting for you</p>
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
                        <p>Lost data will be your biggest worry with our weekly remote backups. 
						You will be assured of this, we will back up your files and folders weekly (1 weekly - 1 copy </p>
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
                        <p>Email Hosting is Built-in featurn offers the ability to send and receive emails regularly to exchange
						work with customers and partners with more professional style.</p>
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
                        <h3>If you are not satisfied, we’ll commitment to refund within 30 days </h3>
                        <p>For your peace of mind to choose and use the service, BKHOST is committed to the trial
						policy and will reimburse the service fee within 30 days if you do not feel comfortable with us.</p>
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