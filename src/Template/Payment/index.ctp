<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Payment/index.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/icon-payment.png', ['alt' => 'Payment']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>HÌNH THỨC THANH TOÁN</h1>
                        <h3>Hình thức thanh toán đa dạng, dễ thao tác, bảo mật cao</h3>
                        <p>Chúng tôi cung cấp nhiều hình thức thanh toán khác nhau như ATM, Chuyển khoản Internet Banking, Paypal, Baokim, ngân lượng, ....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="payment-steps">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Bước 1:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step1.png', ['alt' => 'Bước 1']) ?></div>
                <div class="col-xs-9">Bạn đăng nhập vào<br/> <font color="#bf1718">tài khoản thanh toán</font></div>
                <div class="clearfsix"></div>
            </div>
            <div class="col-sm-4">
                <h3>Bước 2:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step2.png', ['alt' => 'Bước 2']) ?></div>
                <div class="col-xs-9">Nhấp vào "Xem hoá đơn" trong phần<br/> Hóa đơn Trả tiền</div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-4">
                <h3>Bước 3:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step3.png', ['alt' => 'Bước 3']) ?></div>
                <div class="col-xs-9">Chọn phương thức thanh toán ưa thích của bạn và thanh toán cho phù hợp</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div><!--/.payment-steps-->

<div class="payment-methods">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="intro">
                    <h3 class="block-title"><span>Phương thức thanh toán</span></h3>
                    <p>Tất cả thanh toán sẽ được xử lý trong vòng 1-2 ngày làm việc kể từ ngày nhận được thanh toán của bạn. 
                        Bạn sẽ được thông báo khi chúng tôi nhận được thanh toán.</p>
                    <p>Nếu bạn không nhận được thông báo qua email sau 2 ngày làm việc, vui lòng thông báo cho chúng tôi qua 
                        Biểu mẫu Thông báo Thanh toán ở bên phải hoặc gửi email cho chúng tôi theo địa chỉ 
                        <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                </div>
                <div id="accordion">
                    <h3 class="accordion-title"><a href="javascript://" class="payment-atm">Thanh toán bằng thẻ ATM hoặc Internet Banking</a></h3>
                    <div style="display: none">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>NGÂN HÀNG VIETCOMBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>0011003616145</strong><br/>
                                Chi nhánh: <strong>Ba Đình - Hà Nội</strong></p>
                                <hr/>
								<p><strong>NGÂN HÀNG AGRIBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>1482205377238</strong><br/>
                                Chi nhánh: <strong>Hùng Vương - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG Á CHÂU</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>200577189</strong><br/>
                                Chi nhánh: <strong>Hoàng Quốc Việt – Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG SACOMBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>020031079791</strong><br/>
                                Chi nhánh: <strong>Thăng Long – Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG VIETCOMBANK</strong><br />
                                Tên tài khoản: <strong>Công ty CP giải pháp mạng trực tuyến Việt Nam</strong><br/>
                                Số tài khoản: <strong>0021000334936</strong><br/>
                                Chi nhánh: <strong>Hà Nội</strong></p>
                            </div>
                            <div class="col-sm-6">
                                <p><strong>NGÂN HÀNG VIETINBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>102001621276</strong><br/>
                                Chi nhánh: <strong>Nam Thăng Long - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG TECHCOMBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>19029399251019</strong><br/>
                                Chi nhánh: <strong>Hoàng Quốc Việt - Hà Nội</strong></p>
                                <hr/>
								<p><strong>NGÂN HÀNG TPBANK</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>00567364001</strong><br/>
                                Chi nhánh: <strong>Linh Đàm - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG ĐÔNG Á</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>0110386229</strong><br/>
                                Chi nhánh: <strong>Cầu Giấy - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>NGÂN HÀNG BIDV</strong><br />
                                Tên tài khoản: <strong>Trinh Duy Thanh</strong><br/>
                                Số tài khoản: <strong>21510001663757</strong><br/>
                                Chi nhánh: <strong>Cầu Giấy - Hà Nội</strong></p>
                            </div>
                        </div>
                    </div>
                    <h3 class="accordion-title"><a href="javascript://" class="payment-cash">Thanh toán bằng tiền mặt</a></h3>
                    <div style="display: none">Địa chỉ: P.815.B Đại Kim Building,<br />
                        Vũ Tông Phan kéo dài, Định Công, Hà Nội<br/>
                        Điện thoại: 024 6259 1442 - 0984.131.161<br/>
                        Vui lòng cho chúng tôi biết số hóa đơn của bạn hoặc hiển thị bản sao hoá đơn của bạn.</div>
                    <h3 class="accordion-title"><a href="javascript://" class="payment-paypal">Thanh toán bằng Paypal</a></h3>
                    <div style="display: none">Tài khoản Paypal: hopqd.qtm@gmail.com</div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="payment-form">
                    <h3 class="title">Mẫu thông báo thanh toán</h3>
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <p><strong>Nếu bạn đã thanh toán qua các phương thức sau:</strong></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Qua ATM</li>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Qua Paypal</li>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Qua Internet Banking</li>
                        </ul>
                        <p>Vui lòng điền vào mẫu đơn khi thanh toán được thực hiện, 
                            Điều này sẽ giúp chúng tôi theo dõi tình trạng thanh toán và cập nhật tốt hơn 
                            trạng thái tài khoản của bạn cho phù hợp.</p>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="order_num" value="" placeholder="Số hóa đơn hoặc tên miền hoặc IP" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="date" value="" placeholder="Ngày chuyển" class="form-control" required />
                        </div>
                        <p>Tải lên Hóa đơn thanh toán / Bằng chứng thanh toán (Định dạng cho phép: jpg, jpeg, png, gif)</p>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="message" placeholder="Nội dung" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="g-recaptcha" data-sitekey="6LfEACcUAAAAANgQm8Z5eGM-1_wNbrm046qyWiF_"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-7">
                                        <button type="submit" class="btn">Gửi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--/.payment-form-->
            </div>
        </div>
    </div>
</div>