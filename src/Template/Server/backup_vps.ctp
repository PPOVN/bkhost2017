<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/backup_vps.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/backup-vps.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">DỊCH VỤ BACKUP CLOUD VPS</h1>
                        <h3>Dịch vụ dành cho các khách hàng đang sử dụng VPS tại BKHOST</h3>
                        <p>Dịch vụ Backup Server luôn đảm bảo an toàn trong mọi trường hợp Quý khách mất dữ liệu với sự cố không mong muốn sảy ra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="backup-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Một bản sao lưu mỗi ngày để bảo vệ VPS của bạn</h3>
                <p class="mb30">Mất dữ liệu từ dịch vụ của bạn do sai soát trong quá trình sử dụng có thể xảy ra bất cứ lúc nào. 
                    sao lưu dữ liệu là một yêu cầu tối thiểu cho tất cả các doanh nghiệp. Bảo vệ tài sản trực tuyến của bạn 24/7 
                    với sao lưu hàng ngày, BKHOST sẽ thực hiện kế hoạch đó thay cho bạn hàng ngày thay vì một tuần 1 lần Backup mặc định của chúng tôi.</p>
                <p class="mb30"><strong>Dễ dàng khôi phục bất kỳ tập tin, thư mục hoặc cơ sở dữ liệu với công cụ sao lưu và phục hồi 
                        đơn giản của chúng tôi, dễ dàng truy cập vào bảng điều khiển lưu trữ của bạn. Nhận sao lưu nhiều hơn từ 7 ngày 
                        bản sao lưu cuối cùng cho dữ liệu trong VPS của bạn!</strong></p>
            </div>
            <div class="col-md-6">
                <h3>Nhận được bảo hiểm khi có sự cố sảy ra</h3>
                <div class="row">
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-delete-files.png', ['alt' => 'Delete']) ?></div>
                            <div class="col-sm-8 col-xs-9">Tình cờ xóa các tập tin và thư mục</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-thong-bao.png', ['alt' => 'Hack']) ?></div>
                            <div class="col-sm-8 col-xs-9">Trang web bị xâm nhập, hack</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-warning.png', ['alt' => 'Cảnh báo']) ?></div>
                            <div class="col-sm-8 col-xs-9">Cập nhật trang web của bạn bị lỗi</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb30">
                        <div class="row">
                            <div class="col-sm-4 col-xs-3"><?= $this->Html->image('frontend/icon-virus.png', ['alt' => 'Virus']) ?></div>
                            <div class="col-sm-8 col-xs-9">Bị phá hủy khi bị các yếu tố khách quan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.backup-intro-->

<div class="hosting-columns email-pkgs pdt20 pdb0">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 01</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 10GB</span></li>
                    <li>Thời gian lưu trữ: 1 bản</li>
                    <li>Backup trên: Server SAN</li>
                    <li>Tài khoản quản lý: Có</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>350K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=211&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 30GB</span></li>
                    <li>Thời gian lưu trữ: 2 bản</li>
                    <li>Backup trên: Server SAN</li>
					<li>Tài khoản quản lý: Có</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>600K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=212&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BACKUP 03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 60GB</span></li>
                    <li>Thời gian lưu trữ: 3 bản</li>
                    <li>Backup trên: Cloud Server</li>
                    <li>Tài khoản quản lý: Có</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>900K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=213&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BACKUP 04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 100GB</span></li>
                    <li>Thời gian lưu trữ: 4 bản</li>
                    <li>Backup trên: Cloud Server</li>
                    <li>Tài khoản quản lý: Có</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.1 triệu</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=214&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BACKUP 05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 150GB</span></li>
                    <li>Thời gian lưu trữ: 5 bản</li>
                    <li>Backup trên: Cloud Server</li>
                    <li>Tài khoản quản lý: Có</li>
                    <li>Bảo mật 2 lớp: Có</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.5 triệu</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=215&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="backup-why">
    <div class="container">
        <h3 class="block-title"><span>Tại sao nên mua dịch vụ Backup cho Cloud VPS của bạn</span></h3>
        <?= $this->Html->image('frontend/lich-backup.png', ['alt' => 'Lịch backup']) ?>
        <p class="mt20">Lịch trình sao lưu hàng tuần của chúng tôi</p>
    </div>
</div><!--/.backup-why-->

<?= $this->element('other_services2') ?>