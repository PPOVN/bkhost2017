<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/highlights-ours.ctp with your own version.');
//endif;
?>
<div class="highlights-ours">
    <div class="container">
        <h2>Những yêu tố nổi bật của chúng tôi</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-01.png', ['alt' => 'Hỗ trợ qua điện thoại 24/7']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Hỗ trợ qua điện thoại 24/7</h4>
                        Chúng tôi sẽ hỗ trợ bạn, bất cứ lúc nào
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-09.png', ['alt' => 'Auto-installer phổ biến']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Auto-installer phổ biến</h4>
                        Hỗ trợ nhiều phiên bản PHP phổ biến.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-07.png', ['alt' => 'Hỗ trợ cao cấp 24/7']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Hỗ trợ cao cấp 24/7</h4>
                        Chúng tôi luôn hỗ trợ bạn bất cứ lúc nào khi bạn liên hệ.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-02.png', ['alt' => '99,9% đảm bảo thời gian hoạt động']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>99,9% đảm bảo thời gian hoạt động</h4>
                        Bởi vì thời gian hoạt động là rất quan trọng đối với bạn!.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-08.png', ['alt' => 'Hệ thống Hosting thân thiện WordPress']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Hệ thống Hosting thân thiện WordPress</h4>
                        Quán trình khởi tạo trang web wordpress chỉ bằng 1 click chuột.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-06.png', ['alt' => '100% ổ cứng SSD Enterprise']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>100% ổ cứng SSD Enterprise</h4>
                        Hiệu xuất và ổn định cao.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-03.png', ['alt' => 'Hạ tầng kết nối đạt chuẩn Tier 3']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Hạ tầng kết nối đạt chuẩn Tier 3</h4>
                        Hạ tầng hiện đại, đường truyền tiêu chuẩn chất lượng cao.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-04.png', ['alt' => 'Đảm bảo hoàn tiền trong 30 ngày']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Đảm bảo hoàn tiền trong 30 ngày</h4>
                        Chúng tôi cam kết hoàn tiền cho bạn nếu bạn không hài lòng với chúng tôi ( Hosting).
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('highlights/danhsach-05.png', ['alt' => 'Thời gian giải quyết trong 30 phút']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h4>Thời gian giải quyết trong 30 phút</h4>
                        Cam kết hỗ trợ nhanh nhất khi chúng tôi nhận được yêu cầu..
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.highlights-ours-->