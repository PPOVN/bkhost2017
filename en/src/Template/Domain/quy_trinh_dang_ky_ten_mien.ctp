<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/quy_trinh_dang_ky_ten_mien.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/quytrinh-bkhost-01.png', ['alt' => 'Quy trình']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>DOMAIN NAME REGISTRATION PROCESS</h1>
                        <h3>For the new registration and transfer domain name on BKHOST</h3>
                        <p>You must register to comply with the procedures BKHOST is posted under the following content:Apply online through the Website:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><?= $this->Html->image('frontend/arrow-circle-green.png', ['alt' => 'Arrow']) ?> 
            Register online on the website </h2>
        <p>Register online on the website Bkhost.vn and follow the instructions on the website and the information we send to the email immediately after registration on the website.</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30"><?= $this->Html->image('frontend/arrow-circle-green.png', ['alt' => 'Arrow']) ?> 
            Register directly at the office</h2>
        <p>Địa chỉ: P 815. Tòa B Đại Kim Building, Vũ Tông Phan kéo dài, Hà Nội<br/>
            Điện thoại: (024) 6259 1442 - 0984.131.161 - 08 6887 0620<br/>
            Email: info@Bkhost.vn - Website: www.bkhost.vn - Thuevps.com.vn - thuemaychuao.vn</p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container">
        <h2 class="t_center">For Vietnamese domain name (.vn, .com.vn, .edu.vn ...)</h2>
        <p class="t_center">You need to do the following procedures:</p>
        <ul>
            <li>Download the application form here, complete the information in the declaration, seal the signature (if the representative on the domain name registration), sign and presented the copy of ID card (if the individual)..</li>
            <li>Personal papers: ID card (or passport for foreigners) of the subject being the individual or the person carrying out registration procedures on behalf of the organization; Personal identification is the original for the counter against the information in the statement and the notarized copy if sent by post to the address of the DM.</li>
            <li>You come directly to the BKHOST Vietnam office to pay the fee and filing pending. Or register online through the website www.bkhost.vn and update profile, fees follow the online registration.</li>
        </ul>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container">
        <h2 class="t_center">For international domain names (.com, .net, .org ...)</h2>
        <ul>
            <li>You only need to pay the registration fee, and provide registration information. Domain names will be registered immediately after receiving the fee and within 24 hours..</li>
            <li><h4 class="bold">REGARDING DOMAIN INTERNATIONAL</h4>
            <p>Disclaimer: The customer is responsible for notifying the use of non-.VN domain names on the website http://thongbaotenmien.vn of the Ministry of Information and Communications (Article 23 of the Law on Information Technology).</p>
            <p>Article 41, Decree No. 174/2013 / ND-CP dated 13/11/2013 of the Government: Decree on sanctioning administrative violations in the field of post and telecommunications, information technology and radio frequency electricity.</p>
            <p>Circular No. 24/2015 / TT-BTTTT dated 18/08/2015 of the Ministry of Information and Communications: Regulation on management and use of Internet resources.</p>
            </li>
        </ul>
    </div>
</div>
<div class="lp-row-white">
    <div class="container">
        <h2 class="t_center">Domain name registration information</h2>
        <ul>
            <li>Domain names will be registered shortly after completion of the procedure and fees.</li>
            <li>However, in some special cases, in order for the domain to be registered quickly and avoid losing domain names, we will proceed to register before completing the procedure.</li>
            <li>Vietnam domain name, when you register and complete the procedures will be issued domain name certificate Vietnam. It will be sent to you by post or sent directly after registration.</li>
        </ul>
    </div>
</div>

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>