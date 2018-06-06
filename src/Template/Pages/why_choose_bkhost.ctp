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
                        <p class="font15">Dịch vụ hỗ trợ 24/24 đó chính là lý do tại sao khách hàng lại lựa chọn chúng tôi, chúng tôi tin tưởng với chuyên 
môn và cách giải quyết sự cố nhanh chóng của mình sẽ luôn đem lại sự hài lòng đến bạn, đồng thời chúng tôi cung cấp 
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
                <p>Yếu tố nhân sự BKHOST là quan trọng nhất để thực hiện sứ mệnh chăm sóc khách hàng 24/7, với kinh nghiệm sắp xếp nhân sự hỗ trợ cho từng dịch vụ sản phẩm khác nhau
				nên việc giải quyết các vấn đề khi có sự cố luôn đảm bảo nhanh nhất và ổn định nhất. Chúng tôi biết rằng việc thay đổi nhà cung cấp dịch vụ của bạn là khó khăn. Tuy nhiên bạn hãy tin vào đội ngũ nhân viên
				của chúng tôi luôn ở bên bạn.</p>
                <p>Để tiếp cận với nhóm hỗ trợ của chúng tôi rất dễ dàng, bạn có thể liên hệ với chúng tôi qua các kênh như: Live Chat, Ticket, Email, Điện thoại, Chat Facebook và ở đó chúng tôi luôn chờ bạn yêu cầu.</p>
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
                <p>BKHOST luôn hiểu rằng bạn luôn quan tâm nhất đến việc hỗ trợ khách hàng là hàng đầu, Tuy nhiên với một dịch vụ mạnh mẽ và hoàn hảo thì phần cứng là điều rất quan trọng,
				do đó chúng tôi luôn chủ động đầu tư vào phần cứng thường xuyên, từ đó hệ thống chúng tôi sẽ đem tới những sản phẩm hoàn hảo đến cho bạn.</p>
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
                <p>Hãy để cho chúng tôi quản lý và chăm sóc dịch vụ của bạn thông qua các phần mềm hệ thống an ninh. Dịch vụ của bạn sẽ được
				theo dõi và giám sát hàng ngày, chúng tôi sẽ thông báo cho bạn nhanh nhất khi có mối đe dọa làm ảnh hưởng tới dịch vụ và khi đó bạn và chúng tôi
				sẽ cùng nhau giải quyết các mối đe dọa kịp thời và nhanh nhất.</p>
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
                <p>Chúng tôi có những yêu tố mà bạn nên biết: - Hạ tầng lý tưởng, Hệ thống được đạt tại Trung tâm dữ liệu đạt chuẩn Quốc tế Tier 3. - Kết nối ổn định, Băng thông lớn đảm bảo kết nối luôn thông suốt. -  Bảo mật đa tầng, Máy chủ chúng tôi luôn được kiểm soát nghiêm ngặt thông qua giám sát IP
				truy cập.</p>
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