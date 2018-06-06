<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/cloud_vps.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="content-wrap">
            <div class="content" style="padding-left: 240px">
                <h2>Cloud SSD VPS</h2>
                <h3>Hệ thống Cloud VPS mạnh nhất hiện nay!</h3>
                <p>Cloud VPS dựa trên công nghệ ảo hóa VMware. Với hệ thống máy chủ được đầu tư 100% công nghệ SSD Intel Enterprise và đường truyền tốc độ cao do đó
                                        không còn giới hạn truy xuất dữ liệu như công nghệ cũ.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="t_center mt20 mb20">Cloud SSD VPS với tiện ích đi kèm</h2>
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ssd.jpg', ['alt' => 'SSD']) ?></div>
                        <div class="pull-right">Công nghệ Cloud 100% SSD Intel Enterprise</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-cloud.png', ['alt' => 'Cloud']) ?></div>
                        <div class="pull-right">Hệ thống Cloud tiêu chuẩn Quốc tế với tốc độ cao</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Bản sao lưu hàng tuần (số bản Backup 1 lần/tuần)</div>
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
                <span>CLOUD VPS 01</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 2 Core</li>
                    <li><strong><font color="red">RAM: 1 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 20 GB</li>
					<li><strong>Lưu trữ</strong> : 100% Ổ SSD Intel Pro</li>
                    <li><strong>Băng Thông:</strong> Unlimited</li>
                    <li><strong>Địa chỉ IP:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Công nghệ ảo hóa:</strong> VMware</li>
					<li><strong><font color="red">Tặng RAM khi đăng ký 6 tháng</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>200K</span>1 Tháng</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-30%) ÁP DỤNG 02/1 - 25/1/2018<strong>BKVPST930</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=189" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 02</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 2 Core</li>
                    <li><strong><font color="red">RAM: 2 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 30 GB</li>
					<li><strong>Lưu trữ</strong> : 100% Ổ SSD Intel Pro</li>					
                    <li><strong>Băng Thông:</strong> Unlimited</li>
                    <li><strong>Địa chỉ IP:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Công nghệ ảo hóa:</strong> VMware</li>
					<li><strong><font color="red">Tặng RAM khi đăng ký 6 tháng</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>400K</span>1 Tháng</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-30%) ÁP DỤNG 02/1 - 25/1/2018<strong>BKVPST930</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=190" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 03</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 4 Core</li>
                    <li><strong><font color="red">RAM: 4 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 70 GB</li>
					<li><strong>Lưu trữ</strong> : 100% Ổ SSD Intel Pro</li>					
                    <li><strong>Băng Thông:</strong> Unlimited</li>
                    <li><strong>Địa chỉ IP:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Công nghệ ảo hóa:</strong> VMware</li>
					<li><strong><font color="red">Tặng RAM khi đăng ký 6 tháng</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>800K</span>1 Tháng</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-30%) ÁP DỤNG 02/1 - 25/1/2018<strong>BKVPST930</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=191" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>CLOUD VPS 04</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 6 Core</li>
                    <li><strong><font color="red">RAM: 6 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 100 GB</li>
					<li><strong>Lưu trữ</strong> : 100% Ổ SSD Intel Pro</li>					
                    <li><strong>Băng Thông:</strong> Unlimited</li>
                    <li><strong>Địa chỉ IP:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Công nghệ ảo hóa:</strong> VMware</li>
					<li><strong><font color="red">Tặng RAM khi đăng ký 6 tháng</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.200K</span>1 Tháng</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-30%) ÁP DỤNG 02/1 - 25/1/2018<strong>BKVPST930</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=192" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>CLOUD VPS 05</span>
            </div>
            <div class="column-body">
                <ul>
					<li><strong>vCPU:</strong> 8 Core</li>
                    <li><strong><font color="red">RAM: 8 GB + 512 MB free</font></strong></li>
                    <li><strong>SSD Cloud Storage</strong> : 130 GB</li>
					<li><strong>Lưu trữ</strong> : 100% Ổ SSD Intel Pro</li>					
                    <li><strong>Băng Thông:</strong> Unlimited</li>
                    <li><strong>Địa chỉ IP:</strong> 1</li>
                    <li><strong>Software:</strong> Free Directadmin</li>
					<li><strong>Công nghệ ảo hóa:</strong> VMware</li>
					<li><strong><font color="red">Tặng RAM khi đăng ký 6 tháng</font></strong></li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.600K</span>1 Tháng</div>
                <div class="promo-code">NHẬP MÃ KHUYẾN MÃI (-30%) ÁP DỤNG 02/1 - 25/1/2018<strong>BKVPST930</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=193" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/server/cloud-vps-specifications" class="btn-view-full">
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                <span class="txt">XEM ĐẦY ĐỦ THÔNG TIN KỸ THUẬT</span>
            </a>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="cloud-notes">
    <div class="container">
        <div class="cloud-notes-wrap">
            <h3>CHÚNG TÔI QUẢN LÝ CLOUD VPS CỦA BẠN</h3>
            <h4>BKHOST cung cấp cài đặt miễn phí cho VPS của bạn với Hệ điều hành nhất định và phần mềm</h4>
            <div class="col-sm-6 first">
                <div class="note-column-header">Cài đặt miễn phí Hệ điều hành</div>
                <div class="note-row-odd">Các phiên bản OS của CentOS 6,7</div>
                <div class="note-row-even">Các phiên bản OS của Windown Server 2008 R2, 2012 R2</div>
                <div class="note-row-odd">Các phiên bản OS của Ubuntu 14,16</div>
            </div>
            <div class="col-sm-6">
                <div class="note-column-header note-column-header-blue">Cài đặt miễn phí phần mềm</div>
                <div class="note-row-odd">DirectAdmin bản quyền</div>
                <div class="note-row-even">Các phần mềm cơ bản</div>
                <div class="note-row-odd"></div>
                <div class="note-row-even"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="system-features">
    <div class="container">
        <h3 class="block-title"><span>TÍNH NĂNG VÀ ĐẶC ĐIỂM</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?></div>
                        <div class="col-xs-9">
                            <h3>MÁY CHỦ HIỆU XUẤT CAO</h3>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Server Dell PowerEdge + CPU Intel hiệu xuất cao</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Bộ nhớ 96GB DDR3 ECC</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> 100% Ổ SSD Intel Enterprise</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Phần cứng Raid lưu trữ Redundancy & Performance</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> High-Availability (HA)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'Resource']) ?></div>
                        <div class="col-xs-9">
                            <h3>VIRTUAL PRIVATE SERVER SOFTWARE</h3>
                            <p>VPS của chúng tôi được trang bị với Parallels® Server, CentOS Linux, và DirectAdmin web điều khiển và lưu trữ. 
                                Cần hỗ trợ máy chủ? SuperSupport BKHOST là người hỗ trợ bạn bất cứ lúc nào.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?></div>
                        <div class="col-xs-9">
                            <h3>HỆ ĐIỀU HÀNH</h3>
                            <p>Theo mặc định, tất cả các khởi tạo VPS đi kèm với CentOS7.x. Nếu bạn yêu cầu hệ điều hành khác, 
                                chúng tôi có hệ thống khác như Ubuntu, Debian hoặc Windows Servers cho bạn chọn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><?= $this->Html->image('frontend/icon-da.png', ['alt' => 'Direct Admin']) ?></div>
                        <div class="col-xs-9">
                            <h3>VIRTUAL PRIVATE SERVER SOFTWARE</h3>
                            <p>Kiểm soát hoàn toàn và chức năng trên các trang web, tên miền, email, tập tin của bạn và nhiều hơn nữa 
                                tất cả với bảng điều khiển DirectAdmin và WHM cung cấp miễn phí.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.system-features-->

<div class="hosting-system">
    <div class="container">
        <h3 class="block-title block-title2"><span>CHƯƠNG TRÌNH BAO GỒM</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'First time']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Phần mềm cài đặt đầu tiên</h3>
                        <p>Các phần mềm cho dịch vụ VPS của bạn, Chúng tôi rất mong muốn được hỗ trợ cho VPS của bạn cài đặt tất cả 
                            các phần mềm cần thiết như bạn mong muốn.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-quan-ly.png', ['alt' => 'Quản trị']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Root / Quản trị viên truy cập</h3>
                        <p>Tất cả các máy ảo đi kèm với “root” truy cập với một địa chỉ IPv4 tĩnh. Nhận quyền kiểm soát và 
                            truy cập đến các máy chủ ảo của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Máy chủ hiệu suất cao với SSD</h3>
                        <p>Tất cả các máy chủ của chúng tôi được cung cấp bởi Dell PowerEdge, với ổ SSD Intel Enterprise, phần cứng lưu trữ dự phòng 
                            và hiệu suất hiệu xuất cao.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Sao lưu']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hệ thống sao lưu tự động</h3>
                        <p>Hệ thống Backup tự động tạo ra một bản Backup của hệ thống lưu trữ, để phục hồi dữ liệu khi có thảm họa.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>24/7 SuperSupport</h3>
                        <p>Tất cả các dịch vụ của chúng tôi luôn có đội SuperSupport 24/7. Chúng tôi hỗ trợ qua các phương tiện email, 
                            điện thoại, livechat...!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'WHM & Control Panel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>WHM & Control Panel</h3>
                        <p>Kiểm soát hoàn toàn chức năng trên các trang web, tên miền, email, tập tin của bạn và nhiều hơn nữa với 
                            tất cả các bảng điều khiển DrirectAdmin và WHM</p>
                    </div>
                </div>
            </div>
				<p><span style="color: #ffffff">Dịch vụ chúng tôi tìm kiếm với các từ khóa như sau: thuê máy chủ ảo, thue may chu ao, cloud vps, cloud vps giá rẻ,
				mua vps, thuê máy chủ ảo vps, thue may chu ao vps, thuê vps, thuê vps giá rẻ, thue vps gia re, vps gia re, vps giá rẻ,
				vps giá rẻ nhất, vps hosting</p>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="additional-services">
    <div class="container">
        <h3 class="block-title"><span>TÙY CHỌN DỊCH VỤ BỔ SUNG</span></h3>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-hdd.png', ['alt' => 'HDD']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Bổ sung dung lượng ổ cứng</h3>
                        <p class="price">10 GB - 100.000 đ/mỗi tháng</p>
                        <a href="#" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-server.png', ['alt' => 'Server']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Dịch vụ thuê quản trị Server</h3>
                        <p class="price">1.000.000 đ/mỗi tháng</p>
                        <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'serverAdministration']) ?>" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-resource.png', ['alt' => 'CPU Cores']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Bổ sung CPU Core</h3>
                        <p class="price">1 Core - 200.000 đ/mỗi tháng</p>
                        <a href="#" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-ram.png', ['alt' => 'RAM']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Bổ sung thêm 1GB RAM</h3>
                        <p class="price">1GB - 200.000 đ/mỗi tháng</p>
                        <a href="#" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-ip.png', ['alt' => 'IP']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Bổ sung IP tĩnh</h3>
                        <p class="price">100.000 đ/mỗi tháng</p>
                        <a href="#" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="row item">
                    <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-cpanel.png', ['alt' => 'Cpanel']) ?></div>
                    <div class="col-sm-8 col-xs-9 t_left">
                        <h3>Phần mềm Cpanel</h3>
                        <p class="price">294.000 đ/mỗi tháng</p>
                        <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab2" class="btn btn-warning">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.additional-services-->

<?= $this->element('other_services3') ?>