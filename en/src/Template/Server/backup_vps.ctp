<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/backup_vps.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/backup-vps.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">BACKUP CLOUD VPS SERVICE</h1>
                        <h3>Service for customers using VPS at BKHOST</h3>
                        <p>Backup Server service is always secure in all cases you lost data with unexpected trouble occurred.</p>
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
                <h3>A daily backup to protect your VPS</h3>
                <p class="mb30">Loss of data from your service due to errors in usage may occur at any time. 
				Backup data is a minimum requirement for all businesses. Protect your online assets 24/7 with daily backup, 
				BKHOST will implement that plan for you every day instead of once time a week backup our default.</p>
                <p class="mb30"><strong>Easily restore any file, folder or database with our simple backup and recovery tool, with easy access to 
				your hosting control panel. Get more backups from last 7 days of backups for data in your VPS!</strong></p>
            </div>
            <div class="col-md-6">
                <h3>Get insurance when something goes wrong</h3>
                <div class="row">
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-delete-files.png', ['alt' => 'Delete']) ?></div>
                            <div class="col-sm-8 col-xs-9">Accidental modification/ deletion of files or folders</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-thong-bao.png', ['alt' => 'Hack']) ?></div>
                            <div class="col-sm-8 col-xs-9">Compromised website, hack</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-warning.png', ['alt' => 'Cảnh báo']) ?></div>
                            <div class="col-sm-8 col-xs-9">data corruption after website update</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-virus.png', ['alt' => 'Virus']) ?></div>
                            <div class="col-sm-8 col-xs-9">Banned when the request to the object</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.backup-intro-->

<div class="hosting-columns email-pkgs pdt20 pdb0">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 01</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Backup capacity: 10GB</span></li>
                    <li>Storage time: 1 copy</li>
                    <li>Backup on: Server SAN</li>
                    <li>Account management: Have</li>
                    <li>2 layer security: Have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>350K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=211&carttpl=standard_cart" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Backup capacity: 30GB</span></li>
                    <li>Storage time: 2 copy</li>
                    <li>Backup on: Server SAN</li>
					<li>Account management: Have</li>
                    <li>2 layer security: Have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>600K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=212&carttpl=standard_cart" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BACKUP 03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Backup capacity: 60GB</span></li>
                    <li>Storage time: 3 copy</li>
                    <li>Backup on: Cloud Server</li>
                    <li>Account management: Have</li>
                    <li>2 layer security: Have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>900K</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=213&carttpl=standard_cart" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Backup capacity: 100GB</span></li>
                    <li>Storage time: 4 copy</li>
                    <li>Backup on: Cloud Server</li>
                    <li>Account management: Have</li>
                    <li>2 layer security: Have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.1 triệu</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=214&carttpl=standard_cart" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BACKUP 05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Backup capacity: 150GB</span></li>
                    <li>Storage time: 5 copy</li>
                    <li>Backup on: Cloud Server</li>
                    <li>Account management: Have</li>
                    <li>2 layer security: Have</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.5 triệu</span>/Month</div>
                <div class="promo-code">Register now<strong>Today</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=215&carttpl=standard_cart" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="backup-why">
    <div class="container">
        <h3 class="block-title"><span>Why do you buy backup services for your Cloud VPS?</span></h3>
        <?= $this->Html->image('frontend/lich-backup.png', ['alt' => 'Lịch backup']) ?>
        <p class="mt20">Our weekly backup schedule</p>
    </div>
</div><!--/.backup-why-->

<?= $this->element('other_services2') ?>