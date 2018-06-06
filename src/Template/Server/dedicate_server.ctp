<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/dedicate_server.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <span class="person"></span>
        <div class="content-wrap">
            <div class="content" style="padding-left: 240px">
                <h2>Thuê Server chuyên dụng</h2>
                <h3>Máy chủ chuyên dụng cực kỳ mạnh mẽ</h3>
                <p>Hệ thống máy chủ chuyên dụng vật lý của chúng tôi luôn có nhiều cấu hình đa dạng, với mỗi máy chủ vật lý luôn 
    đem lại hiệu xuất cao đảm bảo luôn sẵn sàng tối đa cho nhu cầu của bạn. Chúng tôi đã có nhiều năm kinh nghiệp 
    việc cung cấp sản phẩm này tới nhiều doanh nghiệp lớn như khối nhà nước, ngân hàng, doanh nghiệp...như 
    Ngân hàng First Bank, Công ty Tin học Bưu Điện, Công ty CP VietNet...</p>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="hosting-columns hosting-columns2">
    <div class="container">
        <div class="col-sm-4">
            <h3 class="title-blue">Máy chủ chuyên dụng</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-2">
                <div class="column-header column-header-blue">
                    <span>SERVER R410</span></br>
					<span>E5620</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R410 Power Edge</strong></li>
                        <li>CPU: <strong>2* E5620 2,40 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>8 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>                    
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ Từ<span>2.450K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=70" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-2">
                <div class="column-header column-header-blue">
                    <span>SERVER R610</span></br>
					<span>E5620</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R610 Power Edge</strong></li>
                        <li>CPU: <strong>2* E5620 2,40 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>8 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>						
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ từ<span>2.650K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=71" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
            <div class="mt25">
                <a href="<?php echo SITE_URL ?>/server/dedicate-server-specifications" class="btn-view-full">
                    <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    <span class="txt">XEM THÔNG TIN KỸ THUẬT</span>
                </a>
            </div>
        </div>
        <div class="col-sm-8">
            <h3 class="title-red">Máy chủ cao cấp</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-4 hosting-column-highlight">
                <div class="column-header">
                    <span>SERVER R410</span></br>
					<span>X5650</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li><strong>Dell R410 Power Edge</strong></li>
						<li>CPU: <strong>2* X5650 2,66 GHz 12M Cache </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>	   
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ từ<span>2.550K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=73" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4">
                <div class="column-header">
                    <span>SERVER R320</span></br>
					<span>E5-2420</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R320 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2420 1,90 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ từ<span>3.300K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=74" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4">
                <div class="column-header">
                  <span>SERVER R420</span></br>
					<span>E5-2430</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R420 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2430 2,20 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2 x 300GB SAS 15K</strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ từ<span>3.550K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=139" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-4 last">
                <div class="column-header">
                    <span>SERVER R720</span></br>
					<span>E5-2640</span>
                </div>
                <div class="column-body">
                    <ul>
						<li><strong>Dell R720 Power Edge</strong></li>
						<li>CPU: <strong>2* E5-2640 2,50 GHz 15M cache, </strong> </li>
                        <li>RAM: <strong>16 GB DDR3 ECC</strong></li>
                        <li>HDD: <strong> 2x300GB SAS 15K </strong></li>
						<li>IP Address:<strong> 1</strong></li>
						<li>Datacenter:<strong> VIETTEL,FPT</strong></li>
						<li>Network:<strong> 100Mbps/ 3Mbps</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price">Chỉ từ<span>4.250K</span>1 Tháng</div>
                    <div class="promo-code">Đăng ký trên 6 tháng (-15%)<strong>KMSVT715</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=140" class="btn btn-warning">Đăng ký</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
            <div class="">
                <a href="<?php echo SITE_URL ?>/server/dedicate-server-specifications" class="btn-view-full">
                    <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    <span class="txt">XEM THÔNG TIN KỸ THUẬT</span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="system-features">
    <div class="container">
        <h3 class="block-title"><span>TÍNH NĂNG VÀ ĐẶC ĐIỂM</span></h3>
        <div class="style1 mb30">
            <div class="row">
                <div class="col-lg-7">
                    <h3>MULTI-CORE PROCESSING</h3>
                    <p>Các máy chủ của chúng tôi đi kèm với công nghệ Intel đa lõi, cung cấp chất lượng server của bạn 
                        suôn sẻ với một số các phần cứng máy chủ có hiệu suất cao nhất.</p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
        <div class="style2 mb30">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <h3>HỆ THỐNG LƯU TRỮ CÔNG NGHỆ SAS VÀ SSD</h3>
                    <p>Đĩa I / O hoạt động thường gây ra chậm trễ, đó là lý do chúng tôi sử dụng công nghệ 15,000rpm SAS và 
                        Unlimited rpm SSD đem đến sự vượt bậc quá trình truy xuất dữ liệu so với ổ cứng thông thường.</p>
                </div>
            </div>
        </div>
        <div class="style3">
            <div class="row">
                <div class="col-lg-7">
                    <h3>TOÀN QUYỀN CÀI ĐẶT DỊCH VỤ</h3>
                    <p>Đó là máy chủ chuyên dụng của bạn. Chúng tôi cung cấp cho bạn hoàn toàn quyền truy cập root, 
                        cấp để bạn có thể cài đặt bất kỳ ứng dụng, plug-in, thư viện, thành phần máy chủ, bất cứ điều gì bạn muốn!</p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
</div><!--/.system-features-->

<div class="hosting-system system-features">
    <div class="container">
        <h3 class="block-title"><span>TÍNH NĂNG VÀ ĐẶC ĐIỂM</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Tốc độ']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Phần cứng máy chủ chuyên dụng</h3>
                            <p>Đó là máy chủ chuyên dụng của bạn. Chúng tôi cung cấp cho bạn hoàn toàn quyền truy cập root 
                                cấp để bạn có thể cài đặt bất kỳ ứng dụng, plug-in, thư viện, thành phần máy chủ, bất cứ điều gì!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-root.png', ['alt' => 'root Access']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>root Access</h3>
                            <p>Đó là về mặt kỹ thuật máy chủ của bạn; bạn sẽ có quyền truy cập root cấp cho phép bạn cài đặt bất cứ điều gì 
                                và tất cả mọi thứ bạn cần để tăng sức mạnh dịch vụ của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Hiệu suất']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Hiệu suất cao Ổ cứng SAS và SSD</h3>
                            <p>SAS và SSD là ổ cứng cung cấp cho hiệu suất tuyệt vời, tính linh hoạt và khả năng mở rộng. 
                                Bạn có thể tin tưởng vào độ tin cậy và hiệu suất của ổ đĩa cứng SAS và SSD của chúng tôi cho máy chủ của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-quan-ly.png', ['alt' => 'Quản lý cơ sở hạ tầng']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Quản lý cơ sở hạ tầng</h3>
                            <p>Thưởng thức hỗ trợ chưa từng có với các máy chủ chuyên dụng mà chúng tôi cung cấp.
                               Đội ngũ hỗ trợ 24/7 của chúng tôi luôn đánh giá hiệu suất và quản lý phần cứng của máy chủ của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Thời gian']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>6 Giờ Thay thế phần cứng</h3>
                            <p>24/7 6 giờ bảo đảm thay thế phần cứng để đảm bảo rằng máy chủ của bạn được thiết lập và chạy bất cứ lúc nào.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-soft.png', ['alt' => 'Soft']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>Hệ thống quản lý máy chủ thông qua KVM</h3>
                            <p>Thông qua hệ thống KVM, bạn hoàn toan có thể điều khiển trực tiếp máy chủ cho dù máy máy chủ bị tắt, 
                                mà không cần phải đến DataCenter của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="additional-services">
    <div class="container">
        <h3 class="block-title"><span>TÙY CHỌN DỊCH VỤ BỔ SUNG</span></h3>
        <h4 class="t_center italic mb50">Để biết thêm add-on dịch vụ, xin vui lòng <a style="color: #bf1718" href="<?php echo SITE_URL ?>/contact">liên hệ với chúng tôi</a>.</h4>
    </div>
</div><!--/.additional-services-->

<?= $this->element('other_services4') ?>