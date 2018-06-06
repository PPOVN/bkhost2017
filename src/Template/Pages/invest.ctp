<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/invest.ctp with your own version.');
//endif;
?>
<div class="page-intro2">
    <div class="container">
        <h1>Quan hệ hợp tác</h1>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container">
        <p class="font16 mb30">Trụ sở chính đặt tại Hà Nội - Việt Nam, BKHOST đang hỗ trợ hơn 3.500 công ty và 11.000 người sử dụng và với đội ngũ 
		nhân viên hơn 15 thành viên. Do đó bạn hãy yên tâm rằng chúng tôi sẽ đem đến cho bạn những dịch vụ tốt nhất mà chúng tôi có.</p>
        <div class="row mb30">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/_HCX2dxzhf4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <p class="font16 mb30">Với sự pha trộn độc đáo của phần mềm bản quyền, quy trình công việc tự động, tối ưu hóa và phát triển nguồn nhân lực chuyên nghiệp, BKHOST đã có thể 
đạt được mức độ cao về hiệu quả hoạt động. Điều này đã cho phép chúng tôi cung cấp các giải pháp với hiệu suất cao cùng sự hỗ trợ khách hàng 24x7 cho 
tốc độ và giá cả phải chăng nhất.</p>
        <ul class="checklist-green">
            <li>Chúng tôi bắt đầu vào năm 2014; chúng tôi đã đầu tư tập trung vào cung cấp các dịch vụ trên Internet</li>
            <li>Kế hoạch phát triển của chúng tôi dần đi vào ổn định trong thời gian sớm và doanh thu chúng tôi dần đi vào tăng trưởng</li>
            <li>Chúng tôi liên tục đầu tư vào hạ tầng, trang thiết bị và công nghệ để cải thiện các dịch vụ của chúng tôi luôn tốt hơn</li>
            <li>Đội ngũ quản lý của chúng tôi có kinh nghiệm tiếp cận xử lý các kỹ thuật cũng như định hướng phát triển kinh doanh và tạo ra giá trị lâu dài</li>
        </ul>
    </div>
</div>

<?= $this->element('highlights-ours') ?>