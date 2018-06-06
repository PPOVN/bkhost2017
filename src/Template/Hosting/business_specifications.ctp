<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/business_specifications.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content pdl15">
                <h2>Hosting doanh nghiệp</h2>
                <blockquote>
                    <h3>Hosting dành cho doanh nghiệp chuyên nghiệp</h3>
                    <p>Hosting doanh nghiệp chúng tôi cho phép bạn tận hưởng tính năng cao cấp với tốc độ và giá cả phải chăng. 
					Nếu bạn cần một dịch vụ cao cấp hỗ trợ khách hàng để phục vụ cho kinh doanh của doanh nghiệp ngày hôm nay. 
					Hosting doanh nghiệp sẽ đáp ứng được nhiều yêu cầu của doanh nghiệp bạn!</p>
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
                            <div class="pkg-name">BK-DN01</div>
                            <div class="pkg-desc">Hoàn hảo kế hoạch lưu trữ website của bạn!</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-DN02</div>
                            <div class="pkg-desc">Nhận được nhiều hơn về không gian lưu trữ trực tuyến và email cho website của bạn.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-DN03</div>
                            <div class="pkg-desc">Nhận được nhiều hơn về không gian lưu trữ trực tuyến và email cho website của bạn.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-DN04</div>
                            <div class="pkg-desc">Nhận được nhiều hơn về không gian lưu trữ trực tuyến và email cho website của bạn.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-DN05</div>
                            <div class="pkg-desc">Nhận được nhiều hơn về không gian lưu trữ trực tuyến và email cho website của bạn.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Dung lượng lưu trữ</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd bold">2 GB</span></td>
                    <td><span class="val val-odd bold">4 GB</span></td>
                    <td><span class="val val-odd bold">6 GB</span></td>
                    <td><span class="val val-odd bold">8 GB</span></td>
                    <td><span class="val val-odd bold">10 GB</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Băng thông</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hỗ trợ kỹ thuật 24/7</span>
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
                        <span class="rn">Hệ thống Hosting tại Việt Nam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=179" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=180" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=181" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=182" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=183" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title1"><span>Các tính năng của Hosting</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">MySQL cơ sở dữ liệu</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Tên miền phụ</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                    <td><span class="val val-even">Không giới hạn</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">FTP Accounts</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                    <td><span class="val val-odd">Không giới hạn</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Addon Domains</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">2</span></td>
                    <td><span class="val val-even">4</span></td>
                    <td><span class="val val-even">6</span></td>
                    <td><span class="val val-even">8</span></td>
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
                        <span class="rn">Hệ thống Hosting tại</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title2"><span>Hỗ trợ kỹ thuật 24/7</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hỗ trợ kỹ thuật 24/7</span>
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
                    <td colspan="6"><div class="block-title block-title3"><span>Giá tiền</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Phí khởi tạo, Cài đặt</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Miễn phí</span></td>
                    <td><span class="val val-odd">Miễn phí</span></td>
                    <td><span class="val val-odd">Miễn phí</span></td>
                    <td><span class="val val-odd">Miễn phí</span></td>
                    <td><span class="val val-odd">Miễn phí</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Thanh toán 6 tháng</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">600k/tháng</span></td>
                    <td><span class="val val-even">1.140k/tháng</span></td>
                    <td><span class="val val-even">1.680k/tháng</span></td>
                    <td><span class="val val-even">2.520k/tháng</span></td>
                    <td><span class="val val-even">3.000k/tháng</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Thanh toán 12 tháng</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">1.2k/tháng</span></td>
                    <td><span class="val val-odd">2.280k/tháng</span></td>
                    <td><span class="val val-odd">3.360k/tháng</span></td>
                    <td><span class="val val-odd">5.040k/tháng</span></td>
                    <td><span class="val val-odd">6.000k/tháng</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Thanh toán 24 tháng</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">2.4k/tháng</span></td>
                    <td><span class="val val-even">4.560k/tháng</span></td>
                    <td><span class="val val-even">6.720k/tháng</span></td>
                    <td><span class="val val-even">10.080k/tháng</span></td>
                    <td><span class="val val-even">12.000k/tháng</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hệ thống Hosting tại Việt Nam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=179" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=180" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=181" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=182" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=183" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                </tr>
            </table>
        </div>
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/business" class="btn-view-full">
                <span class="txt">&lt; CÁC GÓI HOSTING</span>
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </a>
        </div>
    </div>
</div>

<?= $this->element('other_services') ?>