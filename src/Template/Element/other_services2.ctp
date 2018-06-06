<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/other_services2.ctp with your own version.');
//endif;
?>
<div class="other-services">
    <div class="container">
        <span>Xem thêm <strong>dịch vụ khác</strong> của bạn?</span>
        <a href="<?= $this->Url->build(['controller' => 'Order', 'action' => 'index']) ?>" class="btn" target="_blank">XEM CÁC DỊCH VỤ</a>
    </div>
</div><!--/.other-services-->