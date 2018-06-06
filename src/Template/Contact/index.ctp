<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Contact/index.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/call-support.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
                        <h3>Nhà cung cấp dịch vụ Internet uy tín tại Việt Nam</h3>
                        <p>Chúng tôi tự hào về tốc độ hỗ trợ khách hàng và khả năng xử lý các sự cố luôn nhanh nhất, 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-call.png', ['alt' => 'Call']) ?></div>
                        <div class="pull-right mt15"><a href="tel:0462591442">04 6259 1442</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ticket.png', ['alt' => 'Ticket']) ?></div>
                        <div class="pull-right mt15"><a href="https://manage.bkhost.vn/submitticket.php">Gửi Ticket</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-chat.png', ['alt' => 'Live Chat']) ?></div>
                        <div class="pull-right mt15"><a href="https://tawk.to/chat/5812bd87e808d60cd073adcc/default/?$_tawk_popout=true&$_tawk_sk=59719fa77b37fecfcfc4e54d&$_tawk_tk=7c4ef1ea266df1580d434dd000b0d89e&v=561">Live Chat</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-remote.png', ['alt' => 'Remote']) ?></div>
                        <div class="pull-right mt15"><a href="#">Hỗ trợ từ xa</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="contact">
    <div class="container">
        <div class="intro">
            <p>Nếu bạn có vấn đề về tài khoản đăng nhập của bạn? Bạn đừng lo lắng, hãy liên hệ với chúng tôi và chúng tôi sẽ giúp bạn 
                lấy lại bất cứ lúc nào trong ngày! Chúng tôi luôn mong muốn nhận được sự phản hồi về sản phẩm và dịch vụ, 
                và rất mong nhận được sự chia sẻ của bạn để chúng tôi có thể phục vụ tốt hơn! Xin chân thành cảm ơn.</p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="contact-form">
                    <h3 class="title">Liên hệ với chúng tôi</h3>
                    <form class="form" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="name" value="" placeholder="Họ và tên" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" value="" placeholder="Số điện thoại" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" value="" placeholder="Địa chỉ" class="form-control" />
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
                </div><!--/.contact-form-->
            </div>
            <div class="col-md-7">
                <div class="contact-info">
                    <div class="row mb30">
                        <div class="col-sm-6">
                            <h4><?= $this->Html->image('frontend/icon-building.png', ['alt' => 'Liên hệ']) ?> Liên hệ chúng tôi</h4>
                            <p>Địa chỉ: P.815.B Đại Kim Building, Vũ Tông Phan, Định Công, Hà Nội</p>
                            <p>Điện thoại: 024 6259 1442 - 08 6887 0620 - 0984.131.161</p>
                            <p>Mã số thuế: 0106810847</p>
                        </div>
                        <div class="col-sm-6">
                            <h4><?= $this->Html->image('frontend/icon-email.png', ['alt' => 'Emal']) ?> Gửi email cho chúng tôi</h4>
                            <p>Phòng Kinh doanh: <a href="mailto:info@bkhost.vn">kinhdoanh@bkhost.vn</a></p>
                            <p>Phòng Kế toán: <a href="mailto:anhttn@bkhost.vn">hanhchinh@bkhost.vn</a></p>
                            <p>Phòng Hỗ trợ: <a href="mailto:info@bkhost.vn">kythuat@bkhost.vn</a></p>
                        </div>
                    </div>
                    <div class="mb30">
                        <h4><?= $this->Html->image('frontend/icon-location.png', ['alt' => 'Dữ liệu']) ?> Trung tâm dữ liệu của chúng tôi</h4>
                        <div class="row">
                            <div class="col-sm-6"><p>Trung tâm dữ liệu tại Viettel Pháp Vân</p></div>
                            <div class="col-sm-6"><p>Trung tâm dữ liệu tại VNPT</p></div>
                            <div class="col-sm-6"><p>Trung tâm dữ liệu tại FPT</p></div>
                            <div class="col-sm-6"><p>Trung tâm dữ liệu tại CMC</p></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4><?= $this->Html->image('frontend/icon-building.png', ['alt' => 'Liên kết']) ?> Liên kết xã hội</h4>
                            <p>Website: <a href="http://bkhost.vn">www.bkhost.vn</a></p>
                            <p>Blog: <a href="http://blog.bkhost.vn">blog.bkhost.vn</a></p>
                        </div>
                        <div class="col-sm-6">
                            <ul class="socials">
                                <li><a href="#"><?= $this->Html->image('frontend/icon-fb.png', ['alt' => 'Facebook']) ?></a></li>
                                <li><a href="#"><?= $this->Html->image('frontend/icon-gplus.png', ['alt' => 'Google Plus']) ?></a></li>
                                <li><a href="#"><?= $this->Html->image('frontend/icon-linkedin.png', ['alt' => 'Linked In']) ?></a></li>
                                <li><a href="#"><?= $this->Html->image('frontend/icon-yt.png', ['alt' => 'Youtube']) ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.contact-info-->
            </div>
        </div>
    </div>
</div><!--/.contact-->

<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.465741078113!2d105.82364541493857!3d20.97395978602806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acf9cc7470e1%3A0xd3023f6bf51c62af!2zxJDhuqFpIEtpbSBCdWlsZGluZw!5e0!3m2!1svi!2s!4v1498549432428" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>