<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/personal_specifications.ctp with your own version.');
//endif;
?>
<div class="hosting-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content pdl15">
                <h2>Personal Hosting</h2>
                <blockquote>
                    <h3>Great Prices, set up web quickly and supported by our Support 24/7.</h3>
                    <p>Đây cũng là gói dịch vụ cơ bản dành cho các khách hàng mới sử dụng Website trong giai đoạn đầu phát triển, 
					với mức chi phí vừa phải và hợp lý, thích hợp sử dụng cho các Website cá nhân. Thưởng thức độ tin cậy, hỗ trợ và hiệu suất tốt nhất 
					- bắt đầu tài khoản hosting của bạn ngay hôm nay, chúng tôi đảm bảo hoàn lại tiền 30 ngày nếu Quý vị không hài lòng với dịch vụ. Chúng tôi tin tưởng là nhà cung cấp dịch vụ Hosting thuộc TOP uy tín nhất của Việt Nam!</p>
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
                    <td style="width: 17%"></td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">START</div>
                            <div class="pkg-desc">Perfect hosting plan for your website!</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">START PLUS</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">SILVER</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">SILVER PLUS</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">GOLD</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Disk space SSD</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd bold">700 MB</span></td>
                    <td><span class="val val-odd bold">1 GB</span></td>
                    <td><span class="val val-odd bold">2 GB</span></td>
                    <td><span class="val val-odd bold">3 GB</span></td>
                    <td><span class="val val-odd bold">10 GB</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Bandwidth</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">20 GB</span></td>
                    <td><span class="val val-even">50 GB</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Support technical 24/7</span>
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
                        <span class="rn">Hosting system in Vietnam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=10" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=11" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=12" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=13" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=14" class="btn btn-warning">REGISTRATION</a></span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title1"><span>Các tính năng của Hosting</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">MySQL database</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Tên miền phụ</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">FTP Accounts</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Addon Domains</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">2</span></td>
                    <td><span class="val val-even">3</span></td>
                    <td><span class="val val-even">4</span></td>
                    <td><span class="val val-even">6</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Parked Domains</span>
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
                        <span class="rn">Server OS</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hosting system at</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title2"><span>Support technical 24/7</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Support technical 24/7</span>
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
                    <td colspan="6"><div class="block-title block-title3"><span>PRICE</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Initialization fee, Install</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">6 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">141k/6 Month</span></td>
                    <td><span class="val val-even">240k/6 Month</span></td>
                    <td><span class="val val-even">483k/6 Month</span></td>
                    <td><span class="val val-even">750k/6 Month</span></td>
                    <td><span class="val val-even">990k/6 Month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Thanh toán 12 Month</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">282k/12 Month</span></td>
                    <td><span class="val val-odd">480k/12 Month</span></td>
                    <td><span class="val val-odd">966k/12 Month</span></td>
                    <td><span class="val val-odd">1.500k/12 Month</span></td>
                    <td><span class="val val-odd">1.980k/12 Month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24 Month Payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">564k/24 Month</span></td>
                    <td><span class="val val-even">960k/24 Month</span></td>
                    <td><span class="val val-even">1.932k/24 Month</span></td>
                    <td><span class="val val-even">3.000k/24 Month</span></td>
                    <td><span class="val val-even">3.960k/24 Month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hosting system in Vietnam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=10" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=11" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=12" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=13" class="btn btn-warning">REGISTRATION</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=14" class="btn btn-warning">REGISTRATION</a></span></td>
                </tr>
            </table>
        </div>
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/personal" class="btn-view-full">
                <span class="txt">&lt; HOSTING PACKAGES</span>
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </a>
        </div>
    </div>
</div>

<?= $this->element('other_services') ?>