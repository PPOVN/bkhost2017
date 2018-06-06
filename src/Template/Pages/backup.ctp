<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/backup.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/backup-bhost.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">Dịch vụ Backup hàng ngày và dịch vụ phục hồi</h1>
                        <h3>Bảo vệ doanh nghiệp của bạn khi bị mất dữ liệu đột ngột</h3>
                        <p>Thưởng thức dịch vụ Backup hàng ngày là điều mà bạn yên tâm nhất với dịch vụ bạn đang chạy. 
                            Điều này sẽ hạn chế tối đa rủi ro mà bạn gặp phải khi bị mất dữ liệu quan trọng.</p>
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
                <h3>Một bản sao lưu mỗi ngày để bảo vệ trang web của bạn</h3>
                <p class="mb30">Mất dữ liệu từ dịch vụ của bạn do sai soát trong quá trình sử dụng có thể xảy ra bất cứ lúc nào. 
                    Sao lưu dữ liệu là một yêu cầu tối thiểu cho tất cả các doanh nghiệp. Bảo vệ tài sản trực tuyến của bạn 24/7 
                    với sao lưu hàng ngày, BKHOST sẽ thực hiện kế hoạch đó thay cho bạn hàng ngày thay vì một tuần 1 lần Backup mặc định của chúng tôi.</p>
                <p class="mb30"><strong>Dễ dàng khôi phục bất kỳ tập tin, thư mục hoặc cơ sở dữ liệu với công cụ sao lưu và phục hồi đơn giản của 
                        chúng tôi, dễ dàng truy cập vào bảng điều khiển lưu trữ của bạn. Nhận sao lưu nhiều hơn từ 7 ngày bản sao lưu 
                        cuối cùng cho các tập tin cho website của bạn!</strong></p>
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

<div class="backup-pkgs">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="left">
                    <div class="pkg">
                        <div class="lb">Các gói Hosting Cá nhân</div>
                        <div class="vl">100K / tháng</div>
                    </div>
                    <div class="t_right">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=216&carttpl=standard_cart" class="btn">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right">
                    <div class="pkg">
                        <div class="lb">Hosting Doanh nghiệp, Wordpress</div>
                        <div class="vl">200K / tháng</div>
                    </div>
                    <div class="t_right">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=217&carttpl=standard_cart" class="btn">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.backup-pkgs-->

<div class="backup-why">
    <div class="container">
        <h3 class="block-title"><span>Tại sao nên mua dịch vụ Backup cho Hosting của bạn</span></h3>
        <?= $this->Html->image('frontend/lich-backup.png', ['alt' => 'Lịch backup']) ?>
        <p class="mt20">Lịch trình sao lưu hàng tuần của chúng tôi</p>
    </div>
</div><!--/.backup-why-->

<div class="backup-items">
    <div class="container">
        <h3 class="block-title"><span>Thực hiện phục hồi dữ liệu dịch vụ của bạn</span></h3>
        <div class="row">
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-folder.png', ['alt' => 'Folder']) ?></p>
                <span class="bold">File và Thư mục</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'SSL']) ?></p>
                <span class="bold">Chứng chỉ SSL</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-database.png', ['alt' => 'Database']) ?></p>
                <span class="bold">Cơ sở dữ liệu</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Time']) ?></p>
                <span class="bold">Không tốn thời gian chi phí thấp</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-dns.png', ['alt' => 'DNS']) ?></p>
                <span class="bold">Cập nhật DNS</span>
            </div>
            <div class="col-xs-4 mb30">
                <p><?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?></p>
                <span class="bold">E-mail</span>
            </div>
        </div>
    </div>
</div><!--/.backup-items-->

<?= $this->element('other_services2') ?>