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
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="content-wrap">
                    <div class="content">
                        <h2>Business Hosting</h2>
                        <h3>Hosting is for business professionals</h3>
                        <p>Business Hosting allow you enjoy high-speed and high- features with great price. If you need a 
						quality service for the best business operation then Business Hosting will meet many requirements 
						for your business! If you have a question about where to rent the best hosting, we believe that BKHOST is your choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt30 mb30">The best factor of the business hosting</h2>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ssd.jpg', ['alt' => 'SSD']) ?></div>
                        <div class="pull-right">SSD Fast Storage Technology with extremely fast access speed</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-bo.jpg', ['alt' => 'Bảo mật']) ?></div>
                        <div class="pull-right">System against malicious code eXploit Scanner and Local – Attack</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-code.jpg', ['alt' => 'Code']) ?></div>
                        <div class="pull-right">Many PHP Website Options for Website Php 5.2 to 7.0</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Weekly backups (Number of backups twice a week)</div>
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
					<li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 2 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 01</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 20 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 2 backup/week</li>

                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>100K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=179" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 4 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 02</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> 50 Email</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 2 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>190K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=180" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 6 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 04</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 2 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>280K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=181" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BK-DN04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 8 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 06</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 2 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>420K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=182" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BK-DN05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><strong><font color="red">Storage technology: SSD</font></strong></li>
                    <li><strong><font color="red">Disk space SSD: 10 GB</font></strong></li>
					<li><strong><font color="red">Bandwidth: Unlimited</font></strong></li>
                    <li><strong>Addon Domains:</strong> 08</li>
                    <li><strong>Parked Domains:</strong> Unlimited</li>
                    <li><strong>Email Account:</strong> Unlimited</li>
                    <li><strong>FTP Account:</strong> Unlimited</li>
                    <li><strong>MySQL Account:</strong> Unlimited</li>
                    <li><strong>Backup:</strong> 2 backup/week</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>500K</span>1 Month</div>
                <div class="promo-code">Enter promotion code (-50%)<strong>KMHT740</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=183" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/business-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">See full technical information</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="hosting-system mb50">
    <div class="container">
        <h3 class="block-title"><span>The system include</span></h3>
        <div class="row">
            <div class="col-md-6 hidden-sm"><?= $this->Html->image('frontend/bkhost-speed.png', ['alt' => 'Tốc độ nhanh hơn']) ?></div>
            <div class="col-md-6 col-sm-12">
                <div class="widgettext">
                    <h3>Faster than Traditional Hosting!</h3>
                    <?= $this->Html->image('frontend/sdd-01.png', ['alt' => 'SSD', 'class' => 'icon-ssd']) ?>
                    <p>With our Business Hosting is experience the next level for your website. You'll be running on high-performance flash drives (SSDs), 
					ensuring that your website is ultra-fast and responsive</p>
                </div>
            </div>
        </div>
        <div class="resource">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h3>ENHANCED SERVER RESOURCES</h3>
                    <p>Your business expansion plan is enhanced when the hosting space of the Business Hosting service 
					is further expanded and at the same time greater bandwidth and ability to improve with faster servers.</p>
                </div>
                <div class="col-md-5 hidden-sm"></div>
            </div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="hosting-system">
    <div class="container">
        <h3 class="block-title"><span>Our system includes</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Transfer and free installation</h3>
                        <p>Our technique will handle website transfer from your current server. It’s free.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Support 24/7 </h3>
                        <p>All our services are managed by 24/7 supports team. May be through email, phone, 
						livechat or even remote assistance, we will be there waiting for you</p>
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
                        <h3>Automatic remote data backup (files and folders)</h3>
                        <p>Lost data will be your biggest worry with our weekly remote backups. 
						You will be assured of this, we will back up your files and folders weekly (1 weekly - 1 copy</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-wp.png', ['alt' => 'WordPress']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Optimal support web Wordpress</h3>
                        <p>The service is specifically configured for website  use open source WordPress to achieve the highest speed and security.</p>
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
                        <h3>Virus and malware protection (Malware & Virus)</h3>
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
                        <h3>Enhanced server resources</h3>
                        <p>Người sử dụng Hosting doanh nghiệp được hưởng tài nguyên máy chủ lớn hơn. 
                            Thưởng thức Bandwidth có sẵn hơn và khả năng cải thiện với máy chủ nhanh hơn.</p>
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
                        <h3>Speed of transmission</h3>
                        <p>Tốc độ Bandwidth cao? Chúng tôi cung cấp cho bạn Bandwidth và truyền dữ liệu mức giá cao hơn 
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
						thường xuyên để trao đổi công việc với khách hàng và đối tác với phong cách chuyên nghiệp hơn</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-soft.png', ['alt' => 'Soft']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>The system is compatible with multi-programming languages</h3>
                        <p>Hosting systems compatible with multi-programming languages are used for website development (PHP, ASP, ASP.NET, JSP...)</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-cpanel.png', ['alt' => 'Cpanel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống giao diện thân thiện dễ sử dụng</h3>
                        <p>Hệ thống giao diện Directadmin rất phổ biến bởi theo đánh giá của rất nhiều người dùng thì 
                            giao diện này rất thuận tiện trong quá trình thao tác và xử lý.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-refund.png', ['alt' => 'Refund']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>If you are not satisfied, we’ll commitment to refund within 30 days </h3>
                        <p>For your peace of mind to choose and use the service, BKHOST is committed 
						to the trial policy and will reimburse the service fee within 30 days if you do not feel comfortable with us.</p>
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
                            <div class="content">Mình đã Registration và sử dụng dịch vụ hosting bên BKHOST cảm thấy rất tốt, 
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
                            <em>(Month 3 năm 2017)</em>
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