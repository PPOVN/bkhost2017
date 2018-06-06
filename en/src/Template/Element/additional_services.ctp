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
    <h3 class="block-title"><span>Additional service options</span></h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-ip.png', ['alt' => 'Email Hosting']) ?>
                <h3>Business email </h3>
                <p>Raise the brand of the business - Full control over employee email.</p>
                <p class="price">From to <strong>3.5 million</strong>/ forever</p>
                <a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" class="btn btn-warning">Registration</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Backup']) ?>
                <h3>Daily backup service (7 days - 7 copies)</h3>
                <p>Mất dữ liệu sẽ là nỗi lo lớn nhất của bạn với sao lưu từ xa hàng tuần của chúng tôi bạn sẽ an tâm về việc này.</p>
                <p class="price">From to<strong> 1.2 million</strong>/ each year</p>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'backup']) ?>" class="btn btn-warning">Registration</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="item">
                <?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'SSL Certificates']) ?>
                <h3>Website security service</h3>
                <p>Chứng chỉ bảo mật SSL, An toàn cho Website của bạn và cho khách hàng giao dịch tài chính.</p>
                <p class="price">From to <strong>13 USD</strong>/ each year</p>
                <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>" class="btn btn-warning">Registration</a>
            </div>
        </div>
    </div>
</div>