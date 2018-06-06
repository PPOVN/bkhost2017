<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/customers.ctp with your own version.');
//endif;
?>
<div class="page-intro2">
    <div class="container">
        <h1>Khách hàng của BKHOST</h1>
        <p>Hãy yên tâm rằng bạn sẽ nhận được dịch vụ chuyên nghiệp và chất lượng khi bạn sử dụng dịch vụ của chúng tôi. Dịch vụ BKHOST 
            hơn 30.000 người sử dụng trong toàn quốc và quốc tế, các tổ chức chính phủ. Xem một số khách hàng của chúng tôi tại đây:</p>
    </div>
</div><!--/.page-intro2-->

<div class="customer-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('customers/ppo-viet-nam.jpg1', ['alt' => 'PPO Việt Nam']) ?></a>
                </div>
            </div>
        </div>
    </div>
</div><!--/.customer-list-->

<?= $this->element('highlights-ours') ?>