<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/network_solutions.ctp with your own version.');
//endif;
?>
<div class="page-intro2">
    <div class="container">
        <h1>Mở rộng hiệu xuất mạnh mẽ</h1>
        <p class="font18" style="color:#bf1718">Nhiều giải pháp cho nhu cầu lựa chọn dịch vụ trên Internet</p>
    </div>
</div><!--/.page-intro-->

<div class="pdt30">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/nhanvien.jpg', ['alt' => 'Nhân viên']) ?>
            </div>
            <div class="col-sm-6">
                <h2>BKHOST và các giải pháp hoàn hảo</h2>
                <p class="font18 mb30">Việc lựa chọn nhà cung cấp tin cậy để quản lý dịch vụ của bạn là điều may mắn với chúng tôi. 
                    Do đó chúng tôi sẽ không để bạn mất niềm tin một  lần  nữa,  Dịch  vụ  của  bạn  sẽ  được  đội  ngũ  kỹ  thuật  
                    của chúng tôi thay bạn chuyển dữ liệu một cách an toàn nhất và không bị giám đoạn 1s nào?</p>
                <p>
                    <?= $this->Html->image('frontend/Cpanel.png', ['alt' => 'Cpanel']) ?> 
                    <?= $this->Html->image('frontend/da.png', ['alt' => 'DirectAdmin']) ?> 
                    <?= $this->Html->image('frontend/plesk.png', ['alt' => 'Plesk']) ?> 
                </p>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-gray t_center">
    <div class="container">
        <h2 class="mb30">Tại sao cần xây dựng hệ thống đồng bộ</h2>
        <p class="font16">Việc xây dựng một hệ thống khép kín là điều rất quan trọng của một nhà cung cấp dịch vụ như chúng tôi, do đó để đảm bảo an toàn
		cho dữ liệu và hoạt động 24/24 của dịch vụ thì chúng tôi đã phải xậy dựng các hệ thống dự phòng nghiêm ngặt nhất. Do
		đó bạn hãy in tâm tận hưởng những dịch vụ an toàn của chúng tôi mà không phải lo nghĩ sự giám đoạn hoạt động cũng như mất mát dữ liệu của dịch vụ bạn đang sử dụng.</p>
    </div>
</div>

<div class="lp-row-white">
    <div class="container">
        <h2 class="mb30 t_center">Kiến trúc mạng</h2>
        <p class="font16 t_center mb30">Chúng tôi có thể vẽ mô hình tổng quan để mô phỏng, Bạn muốn biết thêm thông tin và một số kiến trúc mạng 
            tuy biến cho nhu cầu của bạn thì bạn hãy liên hệ với chúng tôi</p>
        <div class="row">
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/hatang.png', ['alt' => 'Hạ Tầng', 'class' => 'mb30']) ?> 
                <?= $this->Html->image('frontend/hethongchuan.png', ['alt' => 'Hệ thống chuẩn']) ?> 
            </div>
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/hethongcore.png', ['alt' => 'Hệ thống Core']) ?> 
            </div>
        </div>
    </div>
</div>

<?= $this->element('highlights-ours') ?>