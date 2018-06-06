<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/quy_trinh_dang_ky_ten_mien.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/quytrinh-bkhost-01.png', ['alt' => 'Quy trình']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>QUY TRÌNH ĐĂNG KÝ TÊN MIỀN</h1>
                        <h3>Đối với việc đăng ký mới và Tranfer tên miền về BKHOST</h3>
                        <p>Qúy khách thự hiện cho việc đăng ký phải tuân thủ theo các quy trình được BKHOST biên soạn phía dưới nội dung như sau:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><?= $this->Html->image('frontend/arrow-circle-green.png', ['alt' => 'Arrow']) ?> 
            Đăng ký trực tuyến thông qua Website</h2>
        <p>Đăng ký trực tuyến trên website Bkhost.vn và làm theo đúng hướng dẫn trên website và thông tin chúng tôi gửi 
            vào email ngay sau khi đăng ký trên website.</p>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container t_center">
        <h2 class="mb30"><?= $this->Html->image('frontend/arrow-circle-green.png', ['alt' => 'Arrow']) ?> 
            Đăng ký trực tiếp tại văn phòng</h2>
        <p>Địa chỉ: P 815. Tòa B Đại Kim Building, Vũ Tông Phan kéo dài, Hà Nội<br/>
            Điện thoại: (024) 6259 1442 - 0984.131.161 - 08 6887 0620<br/>
            Email: info@Bkhost.vn - Website: www.bkhost.vn - Thuevps.com.vn - thuemaychuao.vn</p>
    </div>
</div>
<div class="lp-row-white">
    <div class="container">
        <h2 class="t_center">Đối với tên miền Việt Nam (.vn, .com.vn, .edu.vn...)</h2>
        <p class="t_center">Qúy khách cần làm những thủ tục sau đây:</p>
        <ul>
            <li>Download bản khai đăng ký tại đây, điền đầy đủ thông tin trong bản khai, đóng dấu ký tên (nếu là người thay mặt 
                cơ quan đăng ký tên miền), ký tên và CMND kèm theo (nếu là cá nhân).</li>
            <li>Giấy tờ tùy thân: Giấy CMND (hoặc hộ chiếu đối với người nước ngoài)của chủ thể là cá nhân hoặc người thay mặt 
                tổ chức làm thủ tục đăng ký; Giấy tờ tùy thân là bản gốc để NĐK đối chiếu với thông tin trong bản khai và bản có 
                công chứng nếu gửi qua đường bưu chính tới địa chỉ của NĐK.</li>
            <li>Quý khách đến trực tiếp văn phòng BKHOST Việt Nam để thanh toán phí và nộp hồ sơ chờ cấp phát. Hoặc đăng ký online 
                thông qua website www.bkhost.vn và cập nhật hồ sơ, phí theo hướng dẫn đăng ký online.</li>
        </ul>
    </div>
</div>
<div class="lp-row-gray">
    <div class="container">
        <h2 class="t_center">Đối với tên miền Quốc tế (.com, .net, .org...)</h2>
        <ul>
            <li>Quý khách chỉ cần nộp phí đăng ký, và cung cấp thông tin đăng ký. Tên miền sẽ được đăng ký ngay sau khi nhận phí 
                và chậm nhất trong vòng 24h.</li>
            <li><h4 class="bold">QUY ĐỊNH ĐỐI VỚI DOMAIN QUỐC TẾ</h4>
            <p>Khuyến cáo: Khách hàng chịu trách nhiệm thông báo việc sử dụng tên miền không phải là tên miền quốc gia .VN trên 
                website http://thongbaotenmien.vn của Bộ Thông Tin Và Truyền Thông (Theo Điều 23 Luật Công Nghệ Thông Tin).</p>
            <p>Điều 41, Nghị định số 174/2013/NĐ-CP ngày 13/11/2013 của Chính Phủ: Nghị định quy định xử phạt vi phạm hành chính 
                trong lĩnh vực bưu chính viễn thông, công nghệ thông tin và tần số vô tuyến điện.</p>
            <p>Thông tư 24/2015/TT-BTTTT ngày 18/08/2015 của Bộ Thông Tin và Truyền Thông: Quy định về quản lý và sử dụng tài nguyên Internet.</p>
            </li>
        </ul>
    </div>
</div>
<div class="lp-row-white">
    <div class="container">
        <h2 class="t_center">Thông tin đăng ký tên miền</h2>
        <ul>
            <li>Tên miền sẽ được đăng ký ngay sau khi hoàn tất thủ tục và phí.</li>
            <li>Tuy nhiên, trong một số trường hợp đặc biệt, để tên miền được đăng ký nhanh chóng và tránh mất tên miền, chúng tôi 
                sẽ tiến hành đăng ký trước khi hoàn tất thủ tục.</li>
            <li>Tên miền Việt Nam, khi quý khách đăng ký và hoàn tất thủ tục sẽ được cấp Giấy chứng nhận tên miền Việt Nam. 
                Giấy chứng nhận tênmiền sẽ được gửi cho quý khách qua bưu điện hoặc gửi trực tiếp sau khi đăng ký.</li>
        </ul>
    </div>
</div>

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>