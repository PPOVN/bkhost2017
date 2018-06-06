<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/why_choose_bkhost.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/nhomnguoi-01.png', ['alt' => 'Tại sao']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">TẠI SAO CHỌN BKHOST?</h1>
                        <p class="font15">Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên 
môm và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp 
đầy đủ các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb30">
                <?= $this->Html->image('frontend/cham-soc-03.png', ['alt' => 'Hỗ trợ']) ?>
            </div>
            <div class="col-sm-8 mb30">
                <h2 class="title-red">Thành viên hỗ trợ</h2>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên 
môm và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp 
đầy đủ các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên 
môm và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp 
đầy đủ các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
            </div>
        </div>
        <h3 class="mb30">Những gì bạn được thưởng thức:</h3>
        <div class="row">
            <div class="col-sm-3 col-xs-6 mb30">
                <?= $this->Html->image('frontend/people-01.png', ['alt' => 'Hỗ trợ', 'class' => 'mr15']) ?>
                <span class="font15">Ticket hoặc Email</span>
            </div>
            <div class="col-sm-3 col-xs-6 mb30">
                <?= $this->Html->image('frontend/chat-bkhost.png', ['alt' => 'Hỗ trợ', 'class' => 'mr15']) ?>
                <span class="font15">Live Chat</span>
            </div>
            <div class="col-sm-3 col-xs-6 mb30">
                <?= $this->Html->image('frontend/dienthoai-bkhost.png', ['alt' => 'Hỗ trợ', 'class' => 'mr15']) ?>
                <span class="font15">Điện thoại</span>
            </div>
            <div class="col-sm-3 col-xs-6 mb30">
                <?= $this->Html->image('frontend/remote-01.png', ['alt' => 'Hỗ trợ', 'class' => 'mr15']) ?>
                <span class="font15">Kết nối từ xa</span>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb30">
                <?= $this->Html->image('frontend/phancung-bkhost.png', ['alt' => 'Phần cứng']) ?>
            </div>
            <div class="col-sm-8 mb30">
                <h2 class="title-red">Phần cứng</h2>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
            </div>
        </div>
        <h3 class="mb30">Những gì bạn mong đợi:</h3>
        <div class="row">
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/hdd.png', ['alt' => 'Ổ cứng', 'class' => 'mr15']) ?>
                <span class="font18">Phần cứng cao cấp</span>
            </div>
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Tốc độ', 'class' => 'mr15 fl']) ?>
                <span class="font18">Đầu tư vào thiết bị và máy chủ mới để tăng hiệu suất và độ tin cậy</span>
            </div>
            <div class="col-sm-4 col-xs-12 mb30">
                <?= $this->Html->image('frontend/icon-safe-02.png', ['alt' => 'Bảo mật', 'class' => 'mr15 fl']) ?>
                <span class="font18">Bảo mật vật lý cho các máy chủ đặt tại trung tâm dữ liệu của chúng tôi</span>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb30">
                <?= $this->Html->image('frontend/phanmem-bkhost.png', ['alt' => 'Phần mềm']) ?>
            </div>
            <div class="col-sm-8 mb30">
                <h2 class="title-red">Phần mềm</h2>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
            </div>
        </div>
        <h3 class="mb30">Những gì bạn có thể thưởng thức:</h3>
        <div class="row">
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/icon-ssl.png', ['alt' => 'Bảo mật', 'class' => 'mr15 fl']) ?>
                <span class="font18">Hệ thống bảo mật kịp thờ chống lại các lỗ hổng bảo mật mới nhất</span>
            </div>
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/toancau.png', ['alt' => 'Toàn cầu', 'class' => 'mr15 fl']) ?>
                <span class="font18">Nghiên cứu liên tục phát triển liên tục những tính năng mới</span>
            </div>
            <div class="col-sm-4 col-xs-12 mb30">
                <?= $this->Html->image('frontend/firewall.png', ['alt' => 'Tường lửa', 'class' => 'mr15 fl']) ?>
                <span class="font18">Giám sát an ninh và chủ động thông báo về các mối nguy hiểm</span>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb30">
                <?= $this->Html->image('frontend/network.png', ['alt' => 'Mạng']) ?>
            </div>
            <div class="col-sm-8 mb30">
                <h2 class="title-red">Mạng</h2>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
                <p>Dịch vụ hỗ trợ 24/24 chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên môm 
và cách giải quyết sự cố của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp đầy đủ 
các hình thức để bạn có thể liên hệ với chúng tôi bằng nhiều hình thức khác nhau mà bạn có.</p>
            </div>
        </div>
        <h3 class="mb30">Những gì bạn mong đợi:</h3>
        <div class="row">
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/antoanuptime.png', ['alt' => 'Uptime 99%', 'class' => 'mr15 fl']) ?>
                <span class="font18">Đảm bảo thời gian hoạt động 99,9%</span>
            </div>
            <div class="col-sm-4 col-xs-6 mb30">
                <?= $this->Html->image('frontend/icon-speed.png', ['alt' => 'Tốc độ', 'class' => 'mr15 fl']) ?>
                <span class="font18">Quyền truy cập vào các trang web và email của bạn</span>
            </div>
            <div class="col-sm-4 col-xs-12 mb30">
                <?= $this->Html->image('frontend/icon-safe-02.png', ['alt' => 'Bảo mật', 'class' => 'mr15 fl']) ?>
                <span class="font18">Nhiều mạng dự phòng để đảm bảo thời gian hoạt động tối ưu</span>
            </div>
        </div>
    </div>
</div>

<?= $this->element('other_services2') ?>