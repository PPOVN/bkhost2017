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
                        <h1>Bussiness email server</h1>
                        <h3>BKHOST is a experience to develop email service</h3>
                        <p>With Business Email Service, BKHOST is the company that deploys this service. Business email enhances prestige, assert the brand on the internet for individuals and your enterprise and manage the work of efficient staff, check and </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-email-02.png', ['alt' => 'Email']) ?></div>
                        <div class="pull-right">Raise the brand business</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-virus.png', ['alt' => 'Virus']) ?></div>
                        <div class="pull-right">Security system against Spam, Virus</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-money.png', ['alt' => 'Chi phí']) ?></div>
                        <div class="pull-right">Save money, upgrade easily</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ui.png', ['alt' => 'Display']) ?></div>
                        <div class="pull-right">Simple interface, easy to use</div>
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
                <span>BKH-SV10</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Number of emails: 10 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Storage: 10GB/10 User</strong></span></li>
                    <li>Email management: Have</li>
					<li>Number of emails sent / day: 500 email/1/User</li>
                    <li>Display: Webmail/ Outlook</li>
					<li>Backup: daily</li>
                    <li>Support: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>100K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=194" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-SV20</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"> <strong>Number of emails: 20 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Storage: 15GB/1 User</strong></span></li>
                    <li>Email management: Have</li>
					<li>Number of emails sent / day: 500 email/1/User</li>
                    <li>Display: Webmail/ Outlook</li>
					<li>Backup: daily</li>
                    <li>Support: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>150K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=195" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BKH-SV50</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"> <strong>Number of emails: 50 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Storage: 20GB/1 User</strong></span></li>
                    <li>Email management: Have</li>
					<li>Number of emails sent / day: 500 email/1/User</li>
                    <li>Display: Webmail/ Outlook</li>
					<li>Backup: daily</li>
                    <li>Support: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>250K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=196" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKH-SV100</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Number of emails: 100 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Storage: 20GB/1 User</strong></span></li>
                    <li>Email management: Have</li>
					<li>Number of emails sent / day: 500 email/1/User</li>
                    <li>Display: Webmail/ Outlook</li>
					<li>Backup: daily</li>
                    <li>Support: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>400K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=197" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BKH-SV200</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718"><strong>Number of emails: 200 Email</strong></span></li>
                    <li><span style="color: #bf1718"><strong>Storage: 20GB/1 User</strong></span></li>
                    <li>Email management: Have</li>
					<li>Number of emails sent / day: 500 email/1/User</li>
                    <li>Display: Webmail/ Outlook</li>
					<li>Backup: daily</li>
                    <li>Support: 24/7/365</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>750K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=198" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="email-benefit">
    <div class="container">
        <h3 class="block-title"><span>Benefit</span></h3>
        <div class="content">
            <div class="col-md-6"></div>
            <div class="col-md-6 pdb30">
                <h3>Increase business productivity</h3>
                <p>In business, time is money.With Our business Email Service, your employees save time by not having to deal with spam emails anymore, giving your business great productivity gains. BKHOST, Focus on your important matters so we use measure safeguards your email inboxes.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content2">
            <div class="col-sm-6 pdb30">
                <h3>Security for sending email</h3>
                <p>Our strict security policy ensures that your important information is safe and secure. We provide you the ability encrypting connection your email for maximum email security</p>
            </div>
            <div class="col-sm-6"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="hosting-system email-system">
    <div class="container">
        <h3 class="block-title"><span>Program include:</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-malware.png', ['alt' => 'Hệ thống chống Virus']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Antivirus system</h3>
                        <p>Our anti-virus management system will protect your business against phishing emails and emails with common viruses, trojans or malware.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>POP3 / IMAP / SMTP / Support WEBMAIL</h3>
                        <p>Our email hosting plan supports POP3, IMAP, SMTP and web access, so you can use a browser or software to manage your email.</p>
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
                        <h3>Data security system</h3>
                        <p>Our strict security policy ensures that your important information is safe and secure. You can encrypt your email connections for maximum email security.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-support.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>24/7 Super Support</h3>
                        <p>All of our services are available at SuperSupport 24/7. We support via email, phone, livechat ...!</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="email-row email-row2">
    <div class="container">
        <h3 class="block-title"><span>Advanced anti-virus and spam technology</span></h3>
        <?= $this->Html->image('frontend/he-thong-email-server-01.png', ['alt' => 'Email Server']) ?>
        <h4>Supported mobile platforms</h4>
        <?= $this->Html->image('frontend/nen-tang-ho-tro.jpg', ['alt' => 'Platform']) ?>
    </div>
</div><!--/.email-row-->

<?= $this->element('other_services5') ?>