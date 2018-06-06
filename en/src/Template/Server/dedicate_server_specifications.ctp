<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/dedicate_server_specifications.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content pdl15">
                <h2>Hire a dedicated server</h2>
                <blockquote>
                    <h3>Dedicated servers are extremely powerful</h3>
                    <p>Our dedicated physical server system is available in a variety of configurations, with each physical server delivering high 
					performance that ensures maximum availability for your needs. We have many years of experience supplying this product to many 
					large business such as state sector, banks, company ... such as First Bank, Post Informatics and VietNet Joint Stock Company...</p>
                </blockquote>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="specifications">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td style="width: 16%"></td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">SERVER R410 E5620</div>
                            <div class="pkg-desc">Server is entered 100% genuine </div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">SERVER R610 E5620</div>
                            <div class="pkg-desc">Server is entered 100% genuine</div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">SERVER R410 X5650</div>
                            <div class="pkg-desc">Server is entered 100% genuine</div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">SERVER R320 </br>E5-2420</div>
                            <div class="pkg-desc">Server is entered 100% genuine</div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
							<div class="pkg-name">SERVER R420 </br>E5-2430</div>
                            <div class="pkg-desc">Server is entered 100% genuine</div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
							<div class="pkg-name">SERVER R720 </br>E5-2640</div>
                            <div class="pkg-desc">Server is entered 100% genuine</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Sample server</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd bold">Dell PowerEdge R410-1U</span></td>
                    <td><span class="val val-odd bold">Dell PowerEdge R410-1U</span></td>
                    <td><span class="val val-odd bold">Dell PowerEdge R410-1U</span></td>
                    <td><span class="val val-odd bold">Dell PowerEdge R320-1U</span></td>
                    <td><span class="val val-odd bold">Dell PowerEdge R420-1U</span></td>
                    <td><span class="val val-odd bold">Dell PowerEdge R720-2U</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">CPU</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Intel Xeon 2* E5620 8 Core 16 Threads 12M Cache 2,40 GHz  5,86 GT/s Intel® QPI</span></td>
                    <td><span class="val val-even">Intel Xeon 2* E5620 8 Core 16 Threads 12M Cache 2,40 GHz  5,86 GT/s Intel® QPI</span></td>
                    <td><span class="val val-even">Intel Xeon 2* X5650 12 Core 24 Threads 12M Cache 2,66 GHz  6,40 GT/s Intel® QPI</span></td>
                    <td><span class="val val-even">Intel Xeon 2* E5-2420 12 Core 24 Threads 15M Cache 1,90 GHz 7,20 GT/s Intel® QPI</span></td>
                    <td><span class="val val-even">Intel Xeon 2* E5-2430 12 Core 24 Threads 12M Cache 2,20 GHz 7,20 GT/s Intel® QPI</span></td>
                    <td><span class="val val-even">Intel Xeon 2* E5-2640 12 Core 24 Threads 12M Cache 2,50 GHz 7.20 GT/s Intel® QPI</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">RAM memory</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">8GB ECC memory</span></td>
                    <td><span class="val val-odd">8GB ECC memory</span></td>
                    <td><span class="val val-odd">16GB ECC memory</span></td>
                    <td><span class="val val-odd">16GB ECC memory</span></td>
                    <td><span class="val val-odd">16GB ECC memory</span></td>
                    <td><span class="val val-odd">16GB ECC memory</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hard drive capacity</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                    <td><span class="val val-even">2x 300GB SAS (15.000 rpm HDD) Contact SSD</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Băng thông</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps(5TB Data Transfer)</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=70" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=71" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=73" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=74" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=139" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=140" class="btn btn-warning">Registration</a></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Additional configuration</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                </tr>
                <tr>
                    <td colspan="7"><div class="block-title block-title6"><span>Features and specifications</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">RAID</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                    <td><span class="val val-even">Hardware Raid 1</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Static IP Addresses</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">1</span></td>
                    <td><span class="val val-odd">1</span></td>
                    <td><span class="val val-odd">1</span></td>
                    <td><span class="val val-odd">1</span></td>
                    <td><span class="val val-odd">1</span></td>
                    <td><span class="val val-odd">1</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Root Access </span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Remote Reboot</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Software Setup </span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Remote Reboot (KVM)</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Operating System</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                    <td><span class="val val-even">Linux CentOS 6.x,7.x, Windows Server OS, Vmware ESXI 5.5,6.0</span></td>
                </tr>
                <tr>
                    <td colspan="7"><div class="block-title block-title2"><span>24/7 TECHNICAL SUPPORT</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24/7 Phone Support</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24/7 Email Support</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Network SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hardware SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                    <td><span class="val val-odd">Thay thế phần cứng trong 6 giờ</span></td>
                </tr>
                <tr>
                    <td colspan="7"><div class="block-title block-title3"><span>PRICE</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Initialization fee, Install</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Free</span></td>
                    <td><span class="val val-even">Free</span></td>
                    <td><span class="val val-even">Free</span></td>
                    <td><span class="val val-even">Free</span></td>
                    <td><span class="val val-even">Free</span></td>
                    <td><span class="val val-even">Free</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">3 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">2.550.000 đ/3 month</span></td>
                    <td><span class="val val-odd">2.800.000 đ/3 month</span></td>
                    <td><span class="val val-odd">2.700.000 đ/3 month</span></td>
                    <td><span class="val val-odd">3.450.000 đ/3 month</span></td>
                    <td><span class="val val-odd">3.550.000 đ/3 month</span></td>
                    <td><span class="val val-odd">4.400.000 đ/3 month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">6 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">2.500.000 đ/6 month</span></td>
                    <td><span class="val val-even">2.750.000 đ/6 month</span></td>
                    <td><span class="val val-even">2.650.000 đ/6 month</span></td>
                    <td><span class="val val-even">3.350.000 đ/6 month</span></td>
                    <td><span class="val val-even">3.650.000 đ/6 month</span></td>
                    <td><span class="val val-even">4.350.000 đ/6 month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">12 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">2.450.000 đ/12 month</span></td>
                    <td><span class="val val-odd">2.650.000 đ/12 month</span></td>
                    <td><span class="val val-odd">2.550.000 đ/12 month</span></td>
                    <td><span class="val val-odd">3.300.000 đ/12 month</span></td>
                    <td><span class="val val-odd">3.550.000 đ/12 month</span></td>
                    <td><span class="val val-odd">4.250.000 đ/12 month</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=70" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=71" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=73" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=74" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=139" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=140" class="btn btn-warning">Registration</a></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Additional configuration</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                    <td><span class="val val-odd"><i class="fa fa-plus-square" aria-hidden="true"></i> Additional configuration</span></td>
                </tr>
            </table>
        </div>
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/server/dedicate-server" class="btn-view-full">
                <span class="txt">&lt; DEDICATED PACKAGES SERVER</span>
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </a>
        </div>
    </div>
</div>

<?= $this->element('other_services4') ?>