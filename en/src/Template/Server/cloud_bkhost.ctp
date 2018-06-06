<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/cloud_bkhost.ctp with your own version.');
//endif;
?>
<div class="cloud-intro">
    <div class="container">
        <h1>Cloud Private BKHOST</h1>
        <h3>Secure, scalable, powerful cloud computing infrastructure will allow for exclusive use of your service</h3>
        <blockquote>Set up our cloud computing infrastructure with 100% Intel Enterprise SSD technology and our high-speed connection, which allows 
		your service to be used on server system resources as standalone data. If you require high security and strict, you will find that we are 
		always the best solution for you.</blockquote>
    </div>
</div>

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-shield" aria-hidden="true"></i> Control and privacy services</h2>
        <p>The CLoud Private BKHOST system can provide you with a degree of control and security because you are a Cloud VPS user.</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30">Professional <i class="fa fa-briefcase" aria-hidden="true"></i></h2>
        <p>We have the expertise needed for designing, deployment and operating the Cloud VPS you need.</p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-globe" aria-hidden="true"></i> Professional support</h2>
        <p>The system we support you through channels such as Email, Tichket, Live Chat, Phone, Remote Remote to you any time 24/7 with our professional technical team.</p>
    </div>
</div>

<?= $this->element('other_services') ?>