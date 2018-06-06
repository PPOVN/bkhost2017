<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/dedicate_server.ctp with your own version.');
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
                        <h2>Hire a dedicated server</h2>
                        <h3>Dedicated servers are extremely powerful</h3>
                        <p>Our dedicated physical server system is available in a variety of configurations, with each physical server delivering high 
						performance that ensures maximum availability for your needs. We have many years of experience supplying this product to many 
						large business such as state sector, banks, company ... such as First Bank, Post Informatics and VietNet Joint Stock Company...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns hosting-columns2">
    <div class="container">
        <div class="col-sm-4">
            <h3 class="title-blue">Dedicated servers </h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-2">
                <div class="column-header column-header-blue">
                    <span>SERVER R410</span></br>
					<span>E5620</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R410 Power Edge</strong></li>
                        <li>CPU: <strong>2* E5620 2,40 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>8 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>                    
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>2.450K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=70" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-2">
                <div class="column-header column-header-blue">
                    <span>SERVER R610</span></br>
					<span>E5620</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R610 Power Edge</strong></li>
                        <li>CPU: <strong>2* E5620 2,40 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>8 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>						
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>2.650K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=71" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
            <div class="mt25">
                <a href="<?php echo SITE_URL ?>/server/dedicate-server-specifications" class="btn-view-full">
                    <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    <span class="txt">VIEW TECHNICAL INFORMATION</span>
                </a>
            </div>
        </div>
        <div class="col-sm-8">
            <h3 class="title-red">Advanced servers</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-4 hosting-column-highlight">
                <div class="column-header">
                    <span>SERVER R410</span></br>
					<span>X5650</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R410 Power Edge</strong></li>
						<li>CPU: <strong>2* X5650 2,66 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>	   
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>2.550K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=73" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4">
                <div class="column-header">
                    <span>SERVER R320</span></br>
					<span>E5-2420</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R320 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2420 1,90 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>3.300K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=74" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4">
                <div class="column-header">
                  <span>SERVER R420</span></br>
					<span>E5-2430</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R420 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2430 2,20 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>3.550K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=139" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4 last">
                <div class="column-header">
                    <span>SERVER R720</span></br>
					<span>E5-2640</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R720 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2640 2,50 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2x300GB SAS 15K </strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Start<span>4.250K</span>1 Month</div>
                    <div class="promo-code">Enter promotion code (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=140" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
            <div class="">
                <a href="<?php echo SITE_URL ?>/server/dedicate-server-specifications" class="btn-view-full">
                    <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    <span class="txt">VIEW TECHNICAL INFORMATION</span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="system-features">
    <div class="container">
        <h3 class="block-title"><span>Function and feature</span></h3>
        <div class="style1 mb30">
            <div class="row">
                <div class="col-lg-7">
                    <h3>MULTI-CORE PROCESSING</h3>
                    <p>Our servers have Intel multi-core technology, which provides the smoothest quality of your server with some of the highest 
					performance server hardware.</p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
        <div class="style2 mb30">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <h3>SAS and SSD storage technology</h3>
                    <p>Operating I/O disk drives often cause delays, which is why we use 15,000rpm SAS technology and Unlimited rpm SSDs 
					offer superior data access over conventional hard drives.</p>
                </div>
            </div>
        </div>
        <div class="style3">
            <div class="row">
                <div class="col-lg-7">
                    <h3>Full install service</h3>
                    <p>It's your dedicated server. We give you complete root access, so you can install any application, plug-in, library, server component, whatever you want!</p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
</div><!--/.system-features-->

<div class="hosting-system system-features">
    <div class="container">
        <h3 class="block-title"><span>Function and feature</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Tốc độ']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Dedicated server hardware</h3>
                            <p>It's your dedicated server. We give you complete root-level access so you can install any application, plug-in, library, server component, anything!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-root.png', ['alt' => 'root Access']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>root Access</h3>
                            <p>It's technically your server; You will have root access permissions that allow you to set anything and everything you need to boost your service.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Hiệu suất']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>High Performance SAS Hard Drive And SSD</h3>
                            <p>SAS and SSD are hard drives that provide excellent performance, flexibility and scalability. You can 
							trust in the reliability and performance of our SAS and SSD hard drives for your server.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-quan-ly.png', ['alt' => 'Quản lý cơ sở hạ tầng']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Infrastructure management</h3>
                            <p>Enjoy unmatched support with the dedicated servers that we offer. Our 24/7 support team always evaluates the 
							performance and hardware management of your server.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Thời gian']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>6 hours for replacing hardware</h3>
                            <p>24/7 6 hours guaranteed replacement hardware to ensure that your server is up and running at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-soft.png', ['alt' => 'Soft']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Server management system via KVM</h3>
                            <p>Through the KVM system, you can completely control the server even if the server is shut down, without having to go to our DataCenter.</p>
                        </div>
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
        <h4 class="t_center italic mb50">ĐểFor more add-on services, please <a style="color: #bf1718" href="<?php echo SITE_URL ?>/contact">Contact us</a>.</h4>
    </div>
</div><!--/.additional-services-->

<?= $this->element('other_services4') ?>