<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/backup.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/backup-bhost.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">Daily backup service and recovery service</h1>
                        <h3>Protect your business from sudden data loss</h3>
                        <p>Enjoying the Daily Backup service is the most comfortable thing with the service you are running.
                            This will minimize the risk you face when losing important data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="backup-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>A daily backup to protect your website</h3>
                <p class="mb30">Loss of data from your service due to mistake during use may occur at any time. 
                    Data backup is a minimum requirement for all businesses. Protect your online property 24/7
                    with daily back up, BKHOST will implement that plan for you instead of every other week instead with our default backup.</p>
                <p class="mb30"><strong>Back up easily any file,folder or database with our simple back up and recovery tool,
                         Easy access to your hosting control panel. Get more back ups from the last 7 days back up for your files in website!</strong></p>
            </div>
            <div class="col-md-6">
                <h3>Get insurance when have break down</h3>
                <div class="row">
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-delete-files.png', ['alt' => 'Delete']) ?></div>
                            <div class="col-sm-8 col-xs-9">Accidental deletion of files and folders</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-thong-bao.png', ['alt' => 'Hack']) ?></div>
                            <div class="col-sm-8 col-xs-9">Website was hacked</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-warning.png', ['alt' => 'Cảnh báo']) ?></div>
                            <div class="col-sm-8 col-xs-9"> Update your website when it's error</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-virus.png', ['alt' => 'Virus']) ?></div>
                            <div class="col-sm-8 col-xs-9">Destroyed by objective factors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.backup-intro-->

<div class="backup-pkgs">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="left">
                    <div class="pkg">
                        <div class="lb">Personal Hosting packages</div>
                        <div class="vl">100K / month</div>
                    </div>
                    <div class="t_right">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=216&carttpl=standard_cart" class="btn">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right">
                    <div class="pkg">
                        <div class="lb">Business Hosting, Wordpress</div>
                        <div class="vl">200K / month</div>
                    </div>
                    <div class="t_right">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=217&carttpl=standard_cart" class="btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.backup-pkgs-->

<div class="backup-why">
    <div class="container">
        <h3 class="block-title"><span>Why should you buy a Backup Service for Your Hosting</span></h3>
        <?= $this->Html->image('frontend/lich-backup.png', ['alt' => ' backup schedule']) ?>
        <p class="mt20">Our weekly backup schedule</p>
    </div>
</div><!--/.backup-why-->

<div class="backup-items">
    <div class="container">
        <h3 class="block-title"><span>Perform data recovery for your services</span></h3>
        <div class="row">
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-folder.png', ['alt' => 'Folder']) ?></p>
                <span class="bold">File and folder</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'SSL']) ?></p>
                <span class="bold"> SSL Certificate</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-database.png', ['alt' => 'Database']) ?></p>
                <span class="bold">Database</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Time']) ?></p>
                <span class="bold">It take not too much time, low cost </span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-dns.png', ['alt' => 'DNS']) ?></p>
                <span class="bold"> DNS Update</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?></p>
                <span class="bold">E-mail</span>
            </div>
        </div>
    </div>
</div><!--/.backup-items-->

<?= $this->element('other_services2') ?>