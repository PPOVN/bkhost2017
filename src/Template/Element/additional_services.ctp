<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/additional_services.ctp with your own version.');
//endif;
?>
<div class="container">
    <h3 class="block-title"><span>TÙY CHỌN DỊCH VỤ BỔ SUNG</span></h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-ip.png', ['alt' => 'Email Hosting']) ?>
                <h3>Email doanh nghiệp</h3>
                <p>Nâng tầm thương hiệu doanh nghiệp - Full quyền quản lý email nhân viên.</p>
                <p class="price">Chỉ từ <strong>3.5 triệu</strong>/ Vĩnh viễn</p>
                <a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" class="btn btn-warning">Đăng ký</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Backup']) ?>
                <h3>Dịch vụ sao lưu hàng ngày (7 ngày - 7 bản)</h3>
                <p>Mất dữ liệu sẽ là nỗi lo lớn nhất của bạn với sao lưu từ xa hàng tuần của chúng tôi bạn sẽ an tâm về việc này.</p>
                <p class="price">Giá từ<strong> 1.2 triệu</strong>/ mỗi năm</p>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'backup']) ?>" class="btn btn-warning">Đăng ký</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'SSL Certificates']) ?>
                <h3>Dịch vụ bảo mật trang Web</h3>
                <p>Chứng chỉ bảo mật SSL, An toàn cho Website của bạn và cho khách hàng giao dịch tài chính.</p>
                <p class="price">Chỉ từ <strong>250k</strong>/ mỗi năm</p>
                <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>" class="btn btn-warning">Đăng ký</a>
            </div>
        </div>
    </div>
</div>