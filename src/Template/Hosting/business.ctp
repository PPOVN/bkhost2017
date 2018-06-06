<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/business.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="content-wrap">
            <div class="content" style="padding-left: 240px">
                <h2>Hosting doanh nghiệp</h2>
                <h3>Hosting dành cho doanh nghiệp chuyên nghiệp</h3>
                <p>Hosting doanh nghiệp cho phép bạn tận hưởng tốc độ cao và tính năng cao cấp với giá cả phải chăng. 
                    Nếu bạn cần một dịch vụ chất lượng cho hoạt động kinh doanh tốt nhất thì 
                    Hosting doanh nghiệp sẽ đáp ứng được nhiều yêu cầu cho doanh nghiệp bạn! Nếu bạn có hỏi thuê hosting ở đâu tốt nhất thì chúng tôi
                                                tin tưởng rằng BKHOST là lựa chọn cho bạn.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">Những yếu tố nổi trội Hosting doanh nghiệp</h2>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ssd.jpg', ['alt' => 'SSD']) ?></div>
                        <div class="pull-right">Công nghệ lưu trữ SSD tốc độ truy xuất cực nhanh</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-bo.jpg', ['alt' => 'Bảo mật']) ?></div>
                        <div class="pull-right">Hệ thống chống mã độc eXploit Scanner và Local - Attack</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-code.jpg', ['alt' => 'Code']) ?></div>
                        <div class="pull-right">Nhiều lựa chọn phiên bản PHP cho Website Php 5.2 đến 7.0</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Bản sao lưu hàng tuần (Số bản Backup 2 lần/tuần)</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns">
    <div class="container">
        <div class="hosting-column hosting-column-highlight hosting-column-highlight2">
            <div class="column-header">
                <span>BK-DN01</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 2 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 01</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 19 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 2 bản/tuần</li>
					<li><strong>Scan Virus:</strong>Hằng Ngày</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>

                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>100K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=179" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 4 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 03</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 59 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 2 bản/tuần</li>
					<li><strong>Scan Virus:</strong>Hằng Ngày</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>190K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=180" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 6 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 05</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 2 bản/tuần</li>
					<li><strong>Scan Virus:</strong>Hằng Ngày</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>280K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=181" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 8 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 07</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 2 bản/tuần</li>
					<li><strong>Scan Virus:</strong>Hằng Ngày</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>420K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=182" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BK-DN05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Công nghệ lưu trữ: SSD</font></strong></li>
                    <li><strong><font color="red">Dung lượng: 10 GB</font></strong></li>
					<li><strong><font color="red">Băng thông: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 11</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
					<li><strong><font color="red">Giao diện quản lý : Cpanel</font></strong></li>
                    <li><strong>Backup:</strong> 2 bản/tuần</li>
					<li><strong>Scan Virus:</strong>Hằng Ngày</li>
					<li><strong><font color="green"><p class="note" style="white-space: pre-wrap"><i class="fa fa-gift"></i> Miễn phí SSL Let's Encrypt</p></font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>500K</span>1 Tháng</div>
                <div class="promo-code">Nhập mã khuyến mãi (-50%) ÁP DỤNG 05/12 - 30/12/2017<strong>KMHT850</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=183" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/business-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">XEM ĐẦY ĐỦ THÔNG TIN KỸ THUẬT</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="hosting-system mb50">
    <div class="container">
        <h3 class="block-title"><span>HỆ THỐNG CHÚNG TÔI BAO GỒM</span></h3>
        <div class="row">
            <div class="col-md-6 hidden-sm"><?= $this->Html->image('frontend/bkhost-speed.png', ['alt' => 'Tốc độ nhanh hơn']) ?></div>
            <div class="col-md-6 col-sm-12">
                <div class="widgettext">
                    <h3>Nhanh hơn Hosting truyền thống!</h3>
                    <?= $this->Html->image('frontend/sdd-01.png', ['alt' => 'SSD', 'class' => 'icon-ssd']) ?>
                    <p>Với chúng tôi Hosting doanh nghiệp sẽ trải nghiệm một tầm cao mới cho website của bạn. 
                        Bạn sẽ được chạy trên ổ đĩa flash hiệu suất cao (100% SSD Intel Enterprise), đảm bảo rằng trang web của bạn là cực kỳ nhanh nhạy.</p>
                    <p>Thưởng thức blazing nhanh hiệu suất mà không có phải mất chi phí cao.</p>
                </div>
            </div>
        </div>
        <div class="resource">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h3>TÀI NGUYÊN MÁY CHỦ ĐƯỢC TĂNG CƯỜNG</h3>
                    <p>Kế hoạch mở rộng kinh doanh của bạn được tăng cường khi không gian lưu trữ của dịch vụ Hosting doanh nghiệp được mở rộng thêm 
                       và đồng thời băng thông lớn hơn và khả năng cải thiện với các máy chủ nhanh hơn.</p>
                </div>
                <div class="col-md-5 hidden-sm"></div>
            </div>
        </div>
    </div>
</div><!--/.hosting-system-->

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
                            chúng tôi sẽ sao lưu dữ liệu tập tin và thư mục hàng tuần (1 tuần - 2 bản sao mỗi tuần) của bạn.</p>
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
                        <?= $this->Html->image('frontend/icon-malware.png', ['alt' => 'Malware & Virus']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Chống Virus và mã độc (Malware & Virus)</h3>
                        <p>Hệ thống phần mềm chống Virus của chúng tôi bảo vệ Website cho doanh nghiệp của bạn. 
                            Phần mềm phòng chống với virus thông thường, trojan, malware....</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'Tài nguyên']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Tài nguyên máy chủ được tăng cường</h3>
                        <p>Người sử dụng Hosting doanh nghiệp được hưởng tài nguyên máy chủ lớn hơn. 
                            Thưởng thức băng thông có sẵn hơn và khả năng cải thiện với máy chủ nhanh hơn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Speed']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Tốc độ đường truyền</h3>
                        <p>Tốc độ băng thông cao? Chúng tôi cung cấp cho bạn băng thông và truyền dữ liệu mức giá cao hơn 
                            để bạn có thể chạy trang web của bạn suôn sẻ!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-security.png', ['alt' => 'Bảo vệ website']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống báo vệ Website</h3>
                        <p>Hệ thống bảo vệ Website là một công nghệ được phát triển bởi BKHOST cho bạn biết nếu có một kẻ tấn công 
                            đã sửa đổi trang web của bạn mà bạn không biết.</p>
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

<?= $this->element('contact_highlight') ?>

<div class="certificate">
    <div class="container">
        <h3 class="block-title"><span>Chứng nhận</span></h3>
        <div class="row">
            <div class="col-sm-8">
                <div class="feedbacks">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="content">Mình đã đăng ký và sử dụng dịch vụ hosting bên BKHOST cảm thấy rất tốt, 
                                tốc độ load nhanh và ổn định, support cũng nhanh chóng qua ticket không quá 15 phút. 
                                Cảm ơn các bạn đã hỗ trợ cho tôi, vì vậy tôi rất tin dùng dịch vụ của bên bạn. Xin cảm ơn!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Nguyễn Văn Thắng</h3>
                                    <em>Công ty PPO Việt Nam</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">Xem thông tin bản quyền</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                        <div class="item">
                            <div class="content">Tôi đã dùng và chuyển rất nhiều nhà cung cấp Hosting thì mới chọn được
							công ty BKHOST, tôi thấy dịch vụ tại bên này chạy rất ổn định, điều đặc biệt là dịch vụ chăm sóc khách hàng
							hỗ trợ rất nhanh. Đây là địa chỉ cuối cùng tôi sẽ mở rộng thêm dịch vụ. Cảm ơn BKHOST nhé!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Lê Văn Tuấn</h3>
                                    <em>Nhân viên Trường Quốc tế Newton</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">Xem thông tin bản quyền</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div><!--/.feedbacks-->
            </div>
            <div class="col-sm-4">
                <div class="cf mb30">
                    <div class="row">
                        <div class="col-sm-6"><span class="num">95%</span></div>
                        <div class="col-sm-6">
                            <h4>Sự hài lòng Hỗ trợ dịch vụ</h4>
                            <em>(Tháng 3 năm 2017)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="cf">
                    <div class="row">
                        <div class="col-sm-6"><span class="num">5000+</span></div>
                        <div class="col-sm-6">
                            <h4>Khách hàng tin dùng</h4>
                            <em>(Dịch vụ uy tín)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->element('other_services') ?>