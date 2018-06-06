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
                        <h1>Contact us</h1>
                        <h3>Internet service provider prestige in Vietnam</h3>
                        <p>We pride ourselves on customer support speed quickly</p>
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
            <p>If you have problems with your login account? Do not worry, contact us and we will help you get it back at any time of the day! 
			We always look forward to receiving your feedback products and services, and look forward to your sharing so we can better serve! 
			Sincerely thank.</p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="contact-form">
                    <h3 class="title">contact us</h3>
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
                            <h4><?= $this->Html->image('frontend/icon-building.png', ['alt' => 'Liên hệ']) ?> contact us</h4>
                            <p>Add: Room.815.B Dại Kim Building, Vu Tong Phan, Dinh Cong, Ha Noi, Viet Nam</p>
                            <p>Home Phone: 024 6259 1442 - 0984.131.161</p>
                            <p>Tax code: 0106810847</p>
                        </div>
                        <div class="col-sm-6">
                            <h4><?= $this->Html->image('frontend/icon-email.png', ['alt' => 'Emal']) ?> Email us</h4>
                            <p>Business Department: <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                            <p>account department: <a href="mailto:anhttn@bkhost.vn">anhttn@bkhost.vn</a></p>
                            <p>support department: <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                        </div>
                    </div>
                    <div class="mb30">
                        <h4><?= $this->Html->image('frontend/icon-location.png', ['alt' => 'Dữ liệu']) ?> Our data center</h4>
                        <div class="row">
                            <div class="col-sm-6"><p>Data center at Viettel Phap Van</p></div>
                            <div class="col-sm-6"><p>Data center at VNPT</p></div>
                            <div class="col-sm-6"><p>Data center at FPT</p></div>
                            <div class="col-sm-6"><p>Data center at CMC</p></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4><?= $this->Html->image('frontend/icon-building.png', ['alt' => 'Liên kết']) ?> Social Link</h4>
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