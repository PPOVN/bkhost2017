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
                        <h1>Forms of payment</h1>
                        <h3>Mode of payment is is diverse, easy to manipulate, high security</h3>
                        <p>We offer various forms of payment such as ATM, Bank Transfer, Internet Banking, Paypal, Baokim, Bank, ....</p>
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
                <h3>Step 1:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step1.png', ['alt' => 'Bước 1']) ?></div>
                <div class="col-xs-9">Login to<br/> <font color="#bf1718">your account</font></div>
                <div class="clearfsix"></div>
            </div>
            <div class="col-sm-4">
                <h3>Step 2:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step2.png', ['alt' => 'Bước 2']) ?></div>
                <div class="col-xs-9">Click the "View invoices" in the Pay Bills</div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-4">
                <h3>Step 3:</h3>
                <div class="col-xs-3"><?= $this->Html->image('frontend/payment-step3.png', ['alt' => 'Bước 3']) ?></div>
                <div class="col-xs-9">Choose your payment method and pay accordingly</div>
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
                    <h3 class="block-title"><span>Mode of payment</span></h3>
                    <p>All payments will be processed within 1-2 working days of receiving your payment. You will be notified when we receive your payment.</p>
                    <p>If you do not receive an email notification after 2 working days, please notify us via the Payment Notification Form on the right or email us at  
                        <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                </div>
                <div id="accordion">
                    <h3 class="accordion-title"><a href="javascript://" class="payment-atm">Payment by ATM or internet banking</a></h3>
                    <div style="display: none">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>VIETCOMBANK BANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>0011003616145</strong><br/>
                                Branch office: <strong>Ba Đình - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>ACB BANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>200577189</strong><br/>
                                Branch office: <strong>Hoàng Quốc Việt – Hà Nội</strong></p>
                                <hr/>
                                <p><strong>SACOMBANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>020031079791</strong><br/>
                                Branch office: <strong>Thăng Long – Hà Nội</strong></p>
                                <hr/>
                                <p><strong>VIETCOMBANK</strong><br />
                                Account name: <strong>Công ty CP giải pháp mạng trực tuyến Việt Nam</strong><br/>
                                Account number: <strong>0021000334936</strong><br/>
                                Branch office: <strong>Hà Nội</strong></p>
                            </div>
                            <div class="col-sm-6">
                                <p><strong>VIETINBANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>102001621276</strong><br/>
                                Branch office: <strong>Nam Thăng Long - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>TECHCOMBANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>19029399251019</strong><br/>
                                Branch office: <strong>Hoàng Quốc Việt - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>DONG A BANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>0110386229</strong><br/>
                                Branch office: <strong>Cầu Giấy - Hà Nội</strong></p>
                                <hr/>
                                <p><strong>BIDV BANK</strong><br />
                                Account name: <strong>Trinh Duy Thanh</strong><br/>
                                Account number: <strong>21510001663757</strong><br/>
                                Branch office: <strong>Cầu Giấy - Hà Nội</strong></p>
                            </div>
                        </div>
                    </div>
                    <h3 class="accordion-title"><a href="javascript://" class="payment-cash">Payment in cash</a></h3>
                    <div style="display: none">Address: Room.815.B Dai Kim Building,<br />
                        Vu Tong Phan, Dinh Cong, Ha Noi<br/>
                        Home Phone: 024 6259 1442 - 0984.131.161<br/>
                        Please tell us your bill number or show your copy of bill.</div>
                    <h3 class="accordion-title"><a href="javascript://" class="payment-paypal">Payment by Paypal</a></h3>
                    <div style="display: none">Paypal account: hopqd.qtm@gmail.com</div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="payment-form">
                    <h3 class="title">Payment notification form</h3>
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <p><strong>If you paid through the following methods:</strong></p>
                        <ul>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> via  ATM</li>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> via Paypal</li>
                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> via  Internet Banking</li>
                        </ul>
                        <p>Please fill out the form when the payment is made. This form help us track the status of the payments and update your account status accordingly.</p>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="order_num" value="" placeholder="Số hóa đơn hoặc tên miền hoặc IP" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="date" value="" placeholder="Ngày chuyển" class="form-control" required />
                        </div>
                        <p>Upload Bill Payment / Proof of payment (Format allowed: jpg, jpeg, png, gif)</p>
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
                                        <button type="submit" class="btn">Submit</button>
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