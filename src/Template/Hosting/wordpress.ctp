<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/wordpress.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="content-wrap">
            <div class="content" style="padding-left: 240px">
                <h2>Hosting WordPress</h2>
                <h3>Lưu trữ mạnh mẽ được thiết kế dành cho WordPress</h3>
                <p>Dịch vụ Hosting WordPress được cấu hình đặc biệt dành cho các website sử dụng mã nguồn mở WordPress 
                                        để đạt được tốc độ và bảo mật cao nhất. Bạn hãy đăng ký và kiểm chứng ngay hôm nay!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">Những yếu tố nổi trội Hosting WordPress</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-bo.jpg', ['alt' => 'Bảo mật']) ?></div>
                        <div class="pull-right">Hệ thống chống mã độc ConfigServer eXploit Scanner và Chống Local - Attack với CloudLinux OS</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-1click.png', ['alt' => '1 click']) ?></div>
                        <div class="pull-right">One-Click Dễ cài đặt Wordpress cho website của bạn và Miễn phí SSL với Let's Encrypt</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Bản sao lưu hàng tuần ( Số bản backup 1 lần/tuần)</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP01</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 750 MB</font></strong></li>
					<li><strong><font color="red">Băng thông: 20 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 01</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 11 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 1 bản/tuần</li>
					<li><strong>Scan Virus:</strong> 1 Lần/Tháng</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>50K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=184" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 1,5 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: 50 GB</font></strong></li>
                    <li><strong>Addon Domains:</strong> 03</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 29 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 1 bản/tuần</li>
					<li><strong>Scan Virus:</strong> 1 Lần/Tháng</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>80K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=185" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight">
            <div class="column-header">
                <span>BK-WP03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 2,5 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 05</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 1 bản/tuần</li>
					<li><strong>Scan Virus:</strong> 1 Lần/ Tháng</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>140K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=186" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-WP04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 4 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 07</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 1 bản/tuần</li>
					<li><strong>Scan Virus:</strong>1 Lần/ Tháng</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>190K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=187" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BK-WP05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 8 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 11</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 1 bản/tuần</li>
					<li><strong>Scan Virus:</strong>1 Lần/ Tháng</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>280K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=188" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/wordpress-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">XEM ĐẦY ĐỦ THÔNG TIN KỸ THUẬT</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="content">
                    <h2>TẠI SAO PHẢI CHỌN WordPress Hosting tại BKHOST?</h2>
                    <p>Là một hệ thống quản lý nội dung, WordPress là hệ thống xây dựng trang web phổ biến nhất trên thế giới, 
                        cho phép các cá nhân và các doanh nghiệp để tạo ra trang web của họ một cách nhanh chóng và dễ dàng. 
                        WordPress cung cấp cho bạn những công cụ để khởi động trang web của bạn, với vô số các chủ đề và 
                        các plugin có sẵn để bạn có thể tùy chỉnh và thiết kế trang web mà bạn cần.</p>
                </div>
            </div>
            <div class="col-sm-5"><?= $this->Html->image('frontend/wp_host.png', ['alt' => 'WordPress Hosting']) ?></div>
        </div>
    </div>
</div><!--/.why-choose-->

<div class="hosting-system">
    <div class="container">
        <h3 class="block-title"><span>HỆ THỐNG CHÚNG TÔI BAO GỒM</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-cpanel.png', ['alt' => 'Cpanel']) ?>
                    </div>
                    <div class="col-xs-9">
						<h3>Hệ thống giao diện gồm CPANEL và DIRECTADMIN</h3>
                        <p>Hệ thống giao diện bao gồm Cpanel và DirectAdmin rất phổ biến bởi theo đánh giá của rất nhiều người dùng thì 
                           những giao diện trên rất thuận tiện trong quá trình thao tác và xử lý. Bạn có thể lựa chọn cho mình
						   giao diện phù hợp trong các bước đăng ký dịch vụ.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hỗ trợ 24/7</h3>
                        <p>Tất cả dịch vụ của chúng tôi được quản lý bằng đội ngũ hỗ trợ liên tục 24/7. Có thể là thông qua email, 
						điện thoại, livechat hoặc thậm chí giúp đỡ từ xa, Chúng tôi sẽ ở đó chờ bạn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Sao lưu dữ liệu từ xa tự động (Đối với file và thư mục)</h3>
                        <p>Mất dữ liệu sẽ là nỗi lo lớn nhất của bạn với sao lưu từ xa hàng tuần của chúng tôi bạn sẽ an tâm về việc này, 
                            chúng tôi sẽ sao lưu dữ liệu tập tin và thư mục hàng tuần (1 tuần - 1 bản sao mỗi tuần) của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-wp.png', ['alt' => 'WordPress']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hỗ trợ tối ưu web Wordpress</h3>
                        <p>Dịch vụ được cấu hình đặc biệt dành cho các website sử dụng mã nguồn mở WordPress để đạt được tốc độ và bảo mật cao nhất.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email Hosting']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Email Hosting</h3>
                        <p>Email Hosting được tích hợp sẵn có đầy đủ tính năng phục vụ nhu cầu gửi và nhận Email 
                            thường xuyên để trao đổi công việc với khách hàng và đối tác với phong cách chuyên nghiệp hơn.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-soft.png', ['alt' => 'Soft']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống tương thích với đa ngôn ngữ lập trình</h3>
                        <p>Hệ thống Hosting tương thích với đa ngôn ngữ lập trình hiện nay được sử dụng để phát triển website (PHP, ASP, ASP.NET, JSP...)</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Chuyển và cài đặt miễn phí</h3>
                        <p>Kỹ thuật của chúng tôi sẽ xử lý việc chuyển website từ máy chủ hiện tại của bạn. 
                            Chúng tôi sẽ giúp bạn về việc này hoàn toàn miễn phí.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-refund.png', ['alt' => 'Refund']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Cam kết hoàn tiền trong vòng 30 ngày nếu không hài lòng</h3>
                        <p>Để quý khách an tâm lựa chọn và sử dụng dịch vụ, BKHOST xin cam kết chính sách dùng thử và hoàn trả 
                            chi phí dịch vụ trong vòng 30 ngày nếu quý khách không cảm thấy hài lòng với chúng tôi.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="additional-services">
    <?= $this->element('additional_services') ?>
</div><!--/.additional-services-->

<?= $this->element('other_services') ?>