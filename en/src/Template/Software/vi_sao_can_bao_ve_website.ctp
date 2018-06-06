<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/vi_sao_can_bao_ve_website.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/ssl-la-gi.png', ['alt' => 'SSl']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>Understand more about SSL security</h1>
                        <h3>What is SLL Certificate?</h3>
                        <p>SSL ensures that all data transmitted between web servers and browsers is private.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-shield" aria-hidden="true"></i> What is SSL?</h2>
        <p>SSL (Secure Sockets Layer) is the standard security technology for establishing an encrypted link between a web server and a browser. This link ensures that all data passed between the web server and browsers remain private and integral.</p>
        <p>SSL ensures that all data passed between the web server and the browser is private, detached. SSL is a technology standard used by millions of websites to protect online transactions with their customers</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">How do SSL Certificates Work? <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p class="mb30">SSL technology protect the online transactions and helps improve the reliability of the Website to customers in just 3 steps</p>
        <div class="row">
            <div class="col-sm-4 mb20">
                <p class="mb20"><?= $this->Html->image('frontend/icon-ssl-128.png', ['alt' => 'SSl']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">1.</span>
                    </div>
                    <div class="col-xs-10 t_left">SSL encrypts sensitive information during online transactions</div>
                </div>
            </div>
            <div class="col-sm-4 mb20">
                <p class="mb20"><?= $this->Html->image('frontend/icon-website.png', ['alt' => 'Website']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">2.</span>
                    </div>
                    <div class="col-xs-10 t_left">Each of SSL certificate is created for a single website</div>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="mb20"><?= $this->Html->image('frontend/icon-trust.png', ['alt' => 'Trust']) ?></p>
                <div class="row">
                    <div class="col-xs-2">
                        <span class="number-large-blue">3.</span>
                    </div>
                    <div class="col-xs-10 t_left">A reputable agency validates the identity of the site owner before issuing an SSL certificate</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-globe" aria-hidden="true"></i> The process of validating the website has been granted</h2>
        <?= $this->Html->image('frontend/ssl-chungthuc.jpg', ['alt' => 'SSl']) ?>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">How to check if a SSL is real or not? <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p>the Website sends the browser an SSL certificate, the browser sends the certificate to a server hosting the approved certificates.</p>
        <p>Technically, SSL uses public-key encryption.This technique allows the Website and the browser to negotiate (step 4 above) a set of keys that will be used during the subsequent information exchange.The securitylock will change each time the next transaction is executed, another person will not be able to decrypt it even if the certificate server's certificate data is available.</p>
        <h2 class="mb30"><i class="fa fa-briefcase" aria-hidden="true"></i> Why should you use an SLL?</h2>
        <p>You register domain to use website services, email etc ... -> there are security vulnerabilities -> hacker attacks -> SSL protect your website and customers.</p>
        <p>Data security: data is encrypted and only authentic recipients can decrypt.</p>
        <p>Data integrity: data is not altered by hackers</p>
        <p>Non-repudiation :The object that makes submitting data can not deny its data </p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30">What are the benefits of using SSL? <i class="fa fa-shield" aria-hidden="true"></i></h2>
        <p>You register domain to use website services, email etc ... -> there are security vulnerabilities -> hacker attacks -> SSL protect your website and customers.</p>
        <p>Secure and encrypt the messages exchanged between the browser and the server.</p>
        <p>Secured transactions between customers and enterprises, to access the system services.</p>
        <p>Secure webmail and applications such as Outlook Web Acess, Exchange, and Office Communication Server.</p>
        <p>Secure webmail and applications such as Outlook Web Acess, Exchange, and Office Communication Server.</p>
        <p>Secure FTP service.</p>
        <p>Security access Control panel.</p>
        <p>Secure internal data transfer services, file sharing, extranet.</p>
        <p>Secure Access VPN Servers, Citrix Access Gateway.</p>
        <p>Enhance the image, brand and corporate credibility.</p>
        <p>Create competitive advantage, increase customer's trust in the website, increase the number of transactions, value online transactions of customers. Non-authenticated and secure websites will always be at risk of data breach, resulting in customers not trusting the service.</p>
    </div>
</div>

<div class="other-services">
    <div class="container">
        <span>See more <strong>other services</strong> included with your hosting?</span>
        <a href="<?= $this->Url->build(['controller' => 'Order', 'action' => 'index']) ?>" class="btn" target="_blank">WATCH THE SERVICES</a>
    </div>
</div><!--/.other-services-->