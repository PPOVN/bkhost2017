<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Email/backup.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro email-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/service-backup.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>DỊCH VỤ BACKUP EMAIL</h1>
                        <h3>Dịch vụ dành cho các dịch vụ Email Server</h3>
                        <p>Dịch vụ Backup Server luôn đảm bảo an toàn trong mọi trường hợp Quý khách mất dữ liệu với sự cố không mong muốn sảy ra.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Backup']) ?></div>
                        <div class="pull-right">Backup lên đến 5 phút mỗi lần</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-safe.png', ['alt' => 'Safe']) ?></div>
                        <div class="pull-right">Bảo mật tuyệt đới với mã hóa AES-256</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-backup.jpg', ['alt' => 'Restore']) ?></div>
                        <div class="pull-right">Phục hồi nhanh chóng, ngay kể cả khi dữ liệu bị xóa</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="hosting-columns email-pkgs">
    <div class="container">
        <div class="hosting-column">
            <div class="column-header">
                <span>BKMAIL-S01</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 25 GB</span></li>
                    <li>Mã hóa Backup: Có</li>
                    <li>Backup: 7 bản/ 7 ngày</li>
                    <li>Lưu trữ: Cloud Server</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>180K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=218&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKMAIL-S02</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 50 GB</span></li>
                    <li>Mã hóa Backup: Có</li>
                    <li>Backup: 7 bản/ 7 ngày</li>
                    <li>Lưu trữ: Cloud Server</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>280K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=219&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>BKMAIL-S03</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 75 GB</span></li>
                    <li>Mã hóa Backup: Có</li>
                    <li>Backup: 7 bản/ 7 ngày</li>
                    <li>Lưu trữ: Cloud Server</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>350K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=220&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column">
            <div class="column-header">
                <span>BKMAIL-S04</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 100 GB</span></li>
                    <li>Mã hóa Backup: Có</li>
                    <li>Backup: 7 bản/ 7 ngày</li>
                    <li>Lưu trữ: Cloud Server</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>450K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=221&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column last">
            <div class="column-header">
                <span>BKMAIL-S05</span>
            </div>
            <div class="column-body">
                <ul>
                    <li><span style="color: #bf1718">Dung lượng Backup: 200 GB</span></li>
                    <li>Mã hóa Backup: Có</li>
                    <li>Backup: 7 bản/ 7 ngày</li>
                    <li>Lưu trữ: Cloud Server</li>
                </ul>
            </div>
            <div class="column-footer">
                <div class="price"><span>800K</span>/tháng</div>
                <div class="promo-code">Đăng ký ngay<strong>Hôm nay</strong></div>
                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=222&carttpl=standard_cart" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
        
        <div class="row mt30">
            <div class="col-sm-2 col-xs-2"><?= $this->Html->image('frontend/icon-safe-128.png', ['alt' => 'Safe']) ?></div>
            <div class="col-sm-10 col-xs-10">
                <p>Dịch vụ backup là dịch vụ BKHOST đưa ra nhằm đáp ứng nhu cầu sử dụng của quý khách hàng. Với dịch vụ backup quý khách 
                    sẽ không còn phải lo lắng việc mất dữ liệu trên các dịch vụ của mình vì những lý do như: server bị hỏng phần cứng, 
                    ổ cứng bị hư, máy tính bị crash, VPS bị xóa nhầm dữ liệu, database bị xóa nhầm dữ liệu, hệ thống mail Exchange 
                    bị lỗi do thao tác sai trong quá trình quản trị hệ thống và còn rất nhiều nguyên nhân khác có thể dẫn đến việc 
                    mất dữ liệu trên server và VPS của mình.</p>
                <p>Với dịch vụ backup của BKHOST quý khách hàng hoàn toàn có thể chủ động lên lịch backup cho server cũng như VPS của mình 
                    chỉ với vài click đơn giản. Dữ liệu của quý khách có thể đảm bảo an toàn bảo mật tại hệ thống backup riêng biệt của 
                    BKHOST và có thể backup lên đến 5 phút một lần và lưu đến nhiều bản khác nhau.</p>
            </div>
        </div>
    </div>
</div><!--/.hosting-columns-->

<div class="email-backup-features">
    <div class="container">
        <h3 class="block-title"><span>Tính năng</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li><span>Mã hoá AES-256</span></li>
                    <li><span>Backup lên đến 5 phút mỗi lần</span></li>
                    <li><span>Backup theo cơ chế block disk thay vì theo cơ chế file như các hình thức backup thông thường</span></li>
                    <li><span>Backup hoạt động ở cơ chế server xử lý (server side) thay vì tại client (client side). 
                            Với cơ chế này sẽ tiết kiệm tài nguyên xử lý tại phía client</span></li>
                    <li><span>Hỗ trợ control panel thông qua giao diện web giúp người dùng có thể chủ động quản lý linh hoạt</span></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><span>Hỗ trợ đa dạng hệ thống như: VMware ESX/ESXi, Microsoft Hyper-V, Citrix XenServer, Parallels Virtuozzo and Parallels Cloud Server</span></li>
                    <li><span>Hỗ trợ đa dạng ứng dụng như: MySQL, Microsoft SQL Server and Exchange</span></li>
                    <li><span>Phục hồi nhanh chóng, ngay kể cả khi server gặp sự cố mà không thể truy cập được</span></li>
                    <li><span>Cho phép khách hàng tự restore dữ liệu</span></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.email-backup-features-->

<div class="additional-services email-row">
    <?= $this->element('additional_services') ?>
</div><!--/.additional-services-->

<?= $this->element('other_services5') ?>