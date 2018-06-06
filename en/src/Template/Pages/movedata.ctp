<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/movedata.ctp with your own version.');
//endif;
?>
<div class="page-intro2">
    <div class="container">
        <h1>Dịch vụ chuyển dữ liệu MIỄN PHÍ</h1>
        <p>Nếu bạn đang sử dụng dịch vụ bên nhà cung cấp khác và muốn chuyển về BKHOST chúng tôi, Đội ngũ kỹ thuật của chúng tôi sẽ giúp bạn 
            thực hiện việc chuyển dữ liệu. Bạn đừng lo lắng vì chúng tôi cam kết chuyển đổi liền mạch với dịch vụ của bạnmà không bị giám đoạn 
            trong 1s nào. Hãy để chochúng tôi thực hiện thay bạn.</p>
    </div>
</div><!--/.page-intro2-->

<div class="lp-row-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="title-red mb30">Chuyển dữ liệu Hosting về BKHOST</h3>
                <p>Việc lựa chọn nhà cung cấp tin cậy để quản lý dịch vụ của bạn là điều may mắn với chúng tôi. 
                    Do đó chúng tôi sẽ không để bạn mất niềm tin một lần nữa, Dịch vụ Hosting của bạn sẽ được đội ngũ kỹ thuật 
                    của chúng tôi thay bạn chuyển dữ liệu một cách an toàn nhất và không bị giám đoạn 1s nào?</p>
            </div>
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/chuyendulieu-bkhost.png', ['alt' => 'Chuyển dữ liệu Hosting về BKHOST']) ?>
            </div>
        </div>
    </div>
</div>

<div class="hosting-system lp-row-gray">
    <div class="container">
        <h2 class="title-red t_center mb50">Loại bỏ những lo lắng khi chuyển dữ liệu</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Chuyên môn kỹ thuật</h3>
                        <p>Chúng tôi có đội ngũ kỹ thuật chuyên môn cao và giàu kinh nghiệm để thực hiện việc này.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time2.png', ['alt' => 'Time']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Thời gian chuyển là nhanh nhất</h3>
                        <p>Chúng tôi luôn báo số lượng thời gian cần chuyển để bạn in tâm hơn trong quá trình thực hiện.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-data.png', ['alt' => 'Data']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Toàn vẹn dữ liệu</h3>
                        <p>Điều này bất kỳ khách hàng nào cũng mong muốn, chúng tôi tin là chúng tôi luôn thực hiện tốt từ trước đến nay.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-backup.png', ['alt' => 'Backup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Không để thời gian chết</h3>
                        <p>Luôn tân dụng thời gian để thực hiện cho bạn vì điều này sẽ đi vào sự ổn định nhanh nhất.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="lp-row-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="title-red">Quy trình bao gồm</h2>
                <ul class="checklist-red">
                    <li>Khách hàng câp cấp các tài khoản cần thiết cho kỹ thuật BKHOST.</li>
                    <li>Kỹ thuật BKHOST liên hệ trao đổi trực tiếp với bạn để lựa chọn giải pháp tốt nhất.</li>
                    <li>Kỹ thuật lựa chọn gói dịch vụ cho bạn phù hợp nhất với dữ liệu cũ.</li>
                    <li>Kỹ thuật BKHOST tiến hành chuyển dữ liệu từ nhà cung cấp cũ sang bên BKHOST.</li>
                    <li>Kiểm tra dữ liệu sau khi chuyển và chạy dịch vụ trên Local cá nhân.</li>
                    <li>Tất cả ổn định sau đó mới bật dịch vụ chuyển về BKHOST để chạy <strong>thành công!</strong></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/congviecdichuyen.png', ['alt' => 'Quy trình']) ?>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-gray t_center">
    <div class="container">
        <h2 class="title-red mb30">Làm thế nào bạn liên hệ với chúng tôi?</h2>
        <p class="font20">Chuyển dữ liệu cho bạn là điều đơn giản với chúng tôi, hãy để kỹ thuật chúng tôi hỗ trợ bạn làm điều này. Gọi cho chúng tôi tại 
            <a href="tel:02462591442">024 6259 1442</a> hoặc gửi email <a href="mailto:info@Bkhost.vn">info@Bkhost.vn</a></p>
    </div>
</div>

<?= $this->element('highlights-ours') ?>