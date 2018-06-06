<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/cloud_vps.ctp with your own version.');
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
                        <h2>Cloud SSD VPS</h2>
                        <h3>The most powerful Cloud VPS system today!</h3>
                        <p>Cloud VPS is based on VMware virtualization technology. With the server system is invested 100% of Intel Enterprise SSD 
						technology and high-speed transmission so there is no longer limit data access as old technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">Cloud SSD VPS with Utilities attach</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ssd.jpg', ['alt' => 'SSD']) ?></div>
                        <div class="pull-right">Cloud Technology 100% SSD Intel Enterprise</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-cloud.png', ['alt' => 'Cloud']) ?></div>
                        <div class="pull-right">Cloud system with international standard high-speed</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Weekly backup (Number of  backup once a week)</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns">
    <div class="container">
        <div class="hosting-column hosting-column-highlight hosting-column-highlight2">
            <div class="column-header">
                <span>CLOUD VPS 01</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 2 Core</li>
                    <li><strong><font color="red">RAM: 1 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 25 GB</li>                 
                    <li><strong>Bandwidth:</strong> Unlimited</li>
                    <li><strong>IP Address:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Virtualization technology:</strong> VMware</li>
					<li><strong><font color="red">RAM donation when registering 6 months</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>200K</span>1 month</div>
                <div class="promo-code">Enter promotion code (-30%)<strong>KMVPST730</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=189" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 02</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 2 Core</li>
                    <li><strong><font color="red">RAM: 2 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 40 GB</li>                 
                    <li><strong>Bandwidth:</strong> Unlimited</li>
                    <li><strong>IP Address:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Virtualization technology:</strong> VMware</li>
					<li><strong><font color="red">RAM donation when registering 6 months</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>400K</span>1 month</div>
                <div class="promo-code">Enter promotion code (-30%)<strong>KMVPST730</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=190" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 03</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 4 Core</li>
                    <li><strong><font color="red">RAM: 4 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 80 GB</li>                 
                    <li><strong>Bandwidth:</strong> Unlimited</li>
                    <li><strong>IP Address:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Virtualization technology:</strong> VMware</li>
					<li><strong><font color="red">RAM donation when registering 6 months</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>800K</span>1 month</div>
                <div class="promo-code">Enter promotion code (-30%)<strong>KMVPST730</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=191" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 04</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 6 Core</li>
                    <li><strong><font color="red">RAM: 6 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 100 GB</li>                 
                    <li><strong>Bandwidth:</strong> Unlimited</li>
                    <li><strong>IP Address:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Virtualization technology:</strong> VMware</li>
					<li><strong><font color="red">RAM donation when registering 6 months</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.200K</span>1 month</div>
                <div class="promo-code">Enter promotion code (-30%)<strong>KMVPST730</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=192" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>CLOUD VPS 05</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 8 Core</li>
                    <li><strong><font color="red">RAM: 8 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 150 GB</li>                 
                    <li><strong>Bandwidth:</strong> Unlimited</li>
                    <li><strong>IP Address:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Virtualization technology:</strong> VMware</li>
					<li><strong><font color="red">RAM donation when registering 6 months</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.600K</span>1 month</div>
                <div class="promo-code">Enter promotion code (-30%)<strong>KMVPST730</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=193" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/server/cloud-vps-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">See full technical information</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="cloud-notes">
    <div class="container">
        <div class="cloud-notes-wrap">
            <h3>WE MANAGEYOUR CLOUD VPS </h3>
            <h4>BKHOST provides a free installation for your VPS with certain operating systems and software.</h4>
            <div class="col-sm-6 first">
                <div class="note-column-header">FREE INSTALLATION OPERATION</div>
                <div class="note-row-odd">OS versions of CentOS 6.7</div>
                <div class="note-row-even">OS versions of Windown Server 2008 R2, 2012 R2</div>
                <div class="note-row-odd">OS versions of Ubuntu 14,16</div>
            </div>
            <div class="col-sm-6">
                <div class="note-column-header note-column-header-blue">FREE INSTALLATION SOFTWARE</div>
                <div class="note-row-odd">DirectAdmin copyright</div>
                <div class="note-row-even">The basic software</div>
                <div class="note-row-odd"></div>
                <div class="note-row-even"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="system-features">
    <div class="container">
        <h3 class="block-title"><span>Function and feature</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?></div>
                        <div class="col-xs-9">
                            <h3>HIGH PERFORMANCE MACHINE</h3>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Dell PowerEdge Server + High Performance Intel CPU</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> 96GB DDR3 ECC memory</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> 100% SSD Intel Enterprise </p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Hardware Raid storage Redundancy & Performance</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> High-Availability (HA)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'Resource']) ?></div>
                        <div class="col-xs-9">
                            <h3>VIRTUAL PRIVATE SERVER SOFTWARE</h3>
                            <p>Our VPS is equipped with Parallels® Server, CentOS Linux, and DirectAdmin web control and archiving. 
							Need support server? SuperSupport BKHOST is your support person anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?></div>
                        <div class="col-xs-9">
                            <h3>CONTROL SYSTEM</h3>
                            <p>By default, all VPS initialization attach with CentOS7.x. If you require another operating system, 
							we have other systems like Ubuntu, Debian or Windows Servers for you to choose from.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-da.png', ['alt' => 'Direct Admin']) ?></div>
                        <div class="col-xs-9">
                            <h3>VIRTUAL PRIVATE SERVER SOFTWARE</h3>
                            <p>Full control and functionality on your web, domain names, emails, files and more all with DirectAdmin dashboards and 
							WHM offers for free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.system-features-->

<div class="hosting-system">
    <div class="container">
        <h3 class="block-title block-title2"><span>The program included</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'First time']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Software first installed</h3>
                        <p>The software for your VPS service. We are looking forward to the support for your VPS install all 
						the necessary software as you desire.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-quan-ly.png', ['alt' => 'Quản trị']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Root / Administrator access</h3>
                        <p>All virtual machines attach with "root" access with a static IPv4 address. Get control and access to your virtual servers.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>High performance server with SSD</h3>
                        <p>All of our servers are powered by Dell PowerEdge, with Intel Enterprise SSDs, redundant storage hardware and high performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Sao lưu']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Automatic backup system</h3>
                        <p>The Backup system automatically creates a backup of the storage system, to recover data during a disaster.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>24/7 SuperSupport</h3>
                        <p>All of our services are available at SuperSupport 24/7. We support via email, phone, livechat ...!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'WHM & Control Panel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>WHM & Control Panel</h3>
                        <p>Full control over your web, domains, emails, files and more with all DrirectAdmin and WHM dashboard.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="additional-services">
    <div class="container">
        <h3 class="block-title"><span>Additional service options</span></h3>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-hdd.png', ['alt' => 'HDD']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Additional hard drive space</h3>
                        <p class="price">10 GB - 35$/month</p>
                        <a href="#" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Server hiring service</h3>
                        <p class="price">350$/month</p>
                        <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'serverAdministration']) ?>" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'CPU Cores']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Additional CPU Core</h3>
                        <p class="price">1 Core - 10$/month</p>
                        <a href="#" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-ram.png', ['alt' => 'RAM']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Adds 1GB of RAM</h3>
                        <p class="price">1GB - 10$/month</p>
                        <a href="#" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-ip.png', ['alt' => 'IP']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Additional static IP</h3>
                        <p class="price">5$/month</p>
                        <a href="#" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-cpanel.png', ['alt' => 'Cpanel']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Cpanel software</h3>
                        <p class="price">15$/month</p>
                        <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab2" class="btn btn-warning">Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.additional-services-->

<?= $this->element('other_services3') ?>