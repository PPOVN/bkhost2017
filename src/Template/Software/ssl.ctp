<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/ssl.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/SSl-bkhost.png', ['alt' => 'SSl']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>Chứng chỉ SSL cho Website</h1>
                        <h3>Cung cấp đảm bảo cho khách hàng ngay hôm nay</h3>
                        <p>Bằng cách sử dụng giấy chứng nhận SSL web, bạn có thể giúp mã hóa thông tin của khách hàng trước khi nó 
                            được gửi qua Internet, bảo vệ lợi ích của họ và thúc đẩy sự tự tin của họ trong trang web của bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="ssl-why">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Tại sao bạn sẽ cần một SSL từ BKHOST?</h3>
                <p>An ninh trang web là tối ưu cho sự thành công kinh doanh trực tuyến của bạn, nhưng nóvẫn là một trong những 
                    yếu tố bị bỏ qua nhất khi các doanh nghiệp đang tạo ra sự uy tín trực tuyến trên Internet. Nếu doanh nghiệp 
                    của bạn bị thu thập bất kỳ thông tin gì của khách hàng quan trọng, chẳng hạn như thông tin cá nhân, thông tin 
                    thẻ tín dụng và nhiều hơn nữa, bạn nên xem xét việc có một chứng chỉ SSL để bảo vệ thông tin của khách hàng mình. 
                    Hơn thế nữa, khách hàng chắc chắn sẽ cảm thấy thoải mái hơn khi họ nhìn thấy “Green Lock” hoặc “thanh địa chỉ xanh” 
                    trong thanh địa chỉ khi quý khách đến thăm trang web của bạn.</p>
                <p>Cung cấp cho khách hàng của bạn với một nền địa chỉ mầu xanh và bạn sẽ đón nhận nhiều hơn từ đơn hàng chuyển đổi có uy tín.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Bảo vệ khi họ truy cập vào bạn:</strong></p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Đăng ký một tài khoản trên trang web của bạn</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Cung cấp thông tin cá nhân và thẻ tín dụng</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Đăng nhập vào cổng thông tin thành viên của bạn</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Hoàn thành giao dịch</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Chi tiết kỹ thuật chứng chỉ SSL</strong></p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Mã hóa các giao dịch trực tuyến của bạn</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Mã hóa dữ liệu lên đến 256-bit</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Bảo vệ khỏi lừa đảo và lừa đảo</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Xác thực</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight-box">
                    <h3>Thấm nhuần niềm tin vào truy cập của bạn</h3>
                    <p>Du khách sẽ không hoàn tất giao dịch của họ hoặc điền vào một mẫu trừ khi họ biết thông tin cá nhân của họ 
                        được an toàn. Có Giấy chứng nhận SSL từ BKHOST là cách hợp lý và đơn giản để bảo mật website của bạn và tăng doanh thu.</p>
                    <p><a href="#" title="Đăng ký SSL" class="btn">Đăng ký</a></p>
                    <p class="italic">Nhanh chóng <strong>SSL @ chỉ 250K / năm</strong></p>
                </div>
            </div>
        </div>
    </div>
</div><!--/.ssl-why-->

<div class="ssl-demo">
    <div class="container">
        <h3 class="block-title"><span>Chứng chỉ SLL như thế nào?</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <h3>Basic SSL</h3>
                <?= $this->Html->image('frontend/demo-ssl1.png', ['alt' => 'SSl']) ?>
            </div>
            <div class="col-sm-6">
                <h3>Basic with Extended Validation (EV)</h3>
                <?= $this->Html->image('frontend/demo-ssl2.png', ['alt' => 'SSl']) ?>
            </div>
        </div>
    </div>
</div><!--/.ssl-demo-->

<div class="hosting-columns hosting-columns2 ssl-pkgs">
    <div class="container">
        <h3 class="block-title"><span>Các gói chứng chỉ SSL</span></h3>
        <div class="col-sm-6">
            <h3 class="title-blue">COMODO SSL</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>POSITIVESSL</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>DV</strong></li>
                        <li>SAN <strong>Không hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>10.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Không có</strong></li>
                        <li>Số lượng Domain <strong>01</strong></li>
						<li>Phí triển khai <strong>Miễn phí</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>250K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=204&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>POSITIVESSL WILDCARD</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>DV</strong></li>
                        <li>SAN <strong>Không hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>10.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Không có</strong></li>
                        <li>Số Domain <strong>Sub-domain</strong></li>
						<li>Phí triển khai <strong>Miễn phí</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>2.350K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=205&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>POSITIVESSL EV SSL</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>EV</strong></li>
                        <li>SAN <strong>Không hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>1.000.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Có</strong></li>
                        <li>Số lượng Domain <strong>01</strong></li>
						<li>Phí triển khai <strong>1.000.000</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>2.500K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=206&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-6">
            <h3 class="title-red">GEOTRUS SSL</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-3">
                <div class="column-header">
                    <span>TRUEBUSINESSID</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>OV</strong></li>
                        <li>SAN <strong>Không hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>1.250.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Không có</strong></li>
                        <li>Số lượng Domain <strong>01</strong></li>
						<li>Phí triển khai <strong>Miễn phí</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>2.500K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=207&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header">
                    <span>TRUEBUSINESSID EV</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>DV</strong></li>
                        <li>SAN <strong>Không hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>1.500.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Có</strong></li>
                        <li>Số lượng Domain <strong>01</strong></li>
						<li>Phí triển khai <strong>1.000.000</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>4.500K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=208&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3 last">
                <div class="column-header">
                    <span>TRUEBUSINESSID EV SAN</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Chứng thực <strong>DV</strong></li>
                        <li>SAN <strong>Hỗ trợ</strong></li>
                        <li>Bảo hiểm <stron>1.425.000 USD</stron></li>
                        <li>Thanh trình duyệt mầu xanh <strong>Có</strong></li>
                        <li>Số lượng Domain <strong>05</strong></li>
						<li>Phí triển khai <strong>1.000.000</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>8.300K</span>1 năm</div>
                    <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=209&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<?= $this->element('other_services2') ?>