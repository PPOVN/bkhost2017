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
                <h2>Cloud SSD VPS</h2>
                <blockquote>
                    <h3>The most powerful Cloud VPS system today!</h3>
                    <p>Cloud VPS is based on VMware virtualization technology. With the server system is invested 100% of 
					Intel Enterprise SSD technology and high-speed transmission so there is no longer limit data access as old technology.</p>
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
                            <div class="pkg-name">CLOUD VPS 01</div>
                            <div class="pkg-desc">100% of Intel Enterprise SSD technology and high-speed transmission </div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">CLOUD VPS 02</div>
                            <div class="pkg-desc">100% of Intel Enterprise SSD technology and high-speed transmission </div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">CLOUD VPS 03</div>
                            <div class="pkg-desc">100% of Intel Enterprise SSD technology and high-speed transmission </div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">CLOUD VPS 04</div>
                            <div class="pkg-desc">100% of Intel Enterprise SSD technology and high-speed transmission </div>
                        </div>
                    </td>
                    <td style="width: 14%">
                        <div class="column-header">
                            <div class="pkg-name">CLOUD VPS 05</div>
                            <div class="pkg-desc">100% of Intel Enterprise SSD technology and high-speed transmission </div>
                        </div>
                </tr>
                <tr>
                    <td>
                        <span class="rn">vCPU</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd bold">2 vCPU</span></td>
                    <td><span class="val val-odd bold">2 vCPU</span></td>
                    <td><span class="val val-odd bold">4 vCPU</span></td>
                    <td><span class="val val-odd bold">6 vCPU</span></td>
                    <td><span class="val val-odd bold">8 vCPU</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">RAM memory</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1 GB + 512 MB free</span></td>
                    <td><span class="val val-even">2 GB + 512 MB free</span></td>
                    <td><span class="val val-even">4 GB + 512 MB free</span></td>
                    <td><span class="val val-even">6 GB + 512 MB free</span></td>
                    <td><span class="val val-even">8 GB + 512 MB free</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">SSD Cloud Storage </span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">25 GB</span></td>
                    <td><span class="val val-odd">40 GB</span></td>
                    <td><span class="val val-odd">80 GB</span></td>
                    <td><span class="val val-odd">100 GB</span></td>
                    <td><span class="val val-odd">150 GB</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Storage technology</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">SSD</span></td>
                    <td><span class="val val-even">SSD</span></td>
                    <td><span class="val val-even">SSD</span></td>
                    <td><span class="val val-even">SSD</span></td>
                    <td><span class="val val-even">SSD</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Bandwidth Network</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps</span></td>
                    <td><span class="val val-odd">100 Mbps/10 Mbps</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=189" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=190" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=191" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=192" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=193" class="btn btn-warning">Registration</a></span></td>
                </tr>
                <tr>
                    <td colspan="7"><div class="block-title block-title6"><span>Features and features</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Static IP address</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">1</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Root account</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">KVM control </span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td colspan="7"><div class="block-title block-title2"><span>24/7 technical support</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24/7 technical support</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Network SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hardware SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
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
                </tr>
                <tr>
                    <td>
                        <span class="rn">3 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">570.000 đ/3 month</span></td>
                    <td><span class="val val-odd">1.140.000 đ/3 month</span></td>
                    <td><span class="val val-odd">2.280.000 đ/3 month</span></td>
                    <td><span class="val val-odd">3.420.000 đ/3 month</span></td>
                    <td><span class="val val-odd">6.840.000 đ/3 month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">6 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1.116.000 đ/6 month</span></td>
                    <td><span class="val val-even">2.232.000 đ/6 month</span></td>
                    <td><span class="val val-even">4.464.000 đ/6 month</span></td>
                    <td><span class="val val-even">6.696.000 đ/6 month</span></td>
                    <td><span class="val val-even">13.392.000 đ/6 month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">12 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">2.160.000 đ/12 month</span></td>
                    <td><span class="val val-odd">4.320.000 đ/12 month</span></td>
                    <td><span class="val val-odd">8.640.000 đ/12 month</span></td>
                    <td><span class="val val-odd">12.960.000 đ/12 month</span></td>
                    <td><span class="val val-odd">25.920.000 đ/12 month</span></td>
                </tr>
				<tr>
                    <td>
                        <span class="rn">24 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">4.080.000 đ/24 month</span></td>
                    <td><span class="val val-odd">8.160.000 đ/24 month</span></td>
                    <td><span class="val val-odd">16.320.000 đ/24 month</span></td>
                    <td><span class="val val-odd">24.480.000 đ/24 month</span></td>
                    <td><span class="val val-odd">48.960.000 đ/24 month</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=189" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=190" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=191" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=192" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=193" class="btn btn-warning">Registration</a></span></td>
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
                </tr>
            </table>
        </div>
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/server/cloud-vps" class="btn-view-full">
                <span class="txt">&lt; PACKAGES CLOUD VPS</span>
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </a>
        </div>
    </div>
</div>

<?= $this->element('other_services4') ?>