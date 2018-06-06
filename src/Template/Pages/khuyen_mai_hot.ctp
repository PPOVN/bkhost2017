<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/khuyen_mai.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div id="BannerKMGiangSinh" class="banner2">
    <div class="MainObject">
        <div class="container">
            <div class="vi_element countdown">
                <div class="countdown_clock" id="countdown_6186"></div>
            </div>
            <script type="text/template" class="example_template">
                <div class="time <%= label %>">
                    <span class="count curr top"><%= curr %></span>
                    <span class="count next top"><%= next %></span>
                    <span class="count next bottom"><%= next %></span>
                    <span class="count curr bottom"><%= curr %></span>
                    <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                </div>
            </script>
        </div>
    </div>
</div>

<div class="container">
    <!--BEGIN HOSTING-->
    <div class="promo-block">
        <h2>KHUYẾN MẠI <span class="name">100% HOSTING SSD CHẤT LƯỢNG CAO</span></h2>
        <div class="desc">Dưới đây là thông tin chi tiết khuyến mại</div>
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <div class="promoList">

                    <div class="promo">
                        <div class="content">
                            <div class="image hide"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                            <div class="text">
                                <h3>START</h3>
                                <div class="desc">
                                 <p><strong><span style="color: #ff0000;">KHUYẾN MẠI 100%</span></strong><br />
                                        Dung Lượng SSD : 500 MB<br />
                                        Băng Thông : 20 GB<br />
                                        Addon Domain : No<br />
                                        Email Account: 1 Email<br />
                                        Giao diện : Cpanel<br/>
										Scan Virus: 1 Lần/Tháng<br/>
										Miễn phí SSL Let's Encrypt<br/>
                                        Backup: Hàng tuần<br/>
										
                                </div>
                                <p class="origin">Giá gốc:<span> 20.000đ/tháng</span></p>
                                <p class="afterPromo">Giá khuyến mãi:<span> 0đ /tháng</span></p>
                                <p class="time">
                                    <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                                    <span class="countDown" data-end="2017-12-15 23:59:59"></span>
                                </p>
                            </div>
                            <div class="CodeArea"><div class="code">MÃ KHUYẾN MẠI: <span class="the_code">KMH100</span></div></div>
                            <div class="LinkButton">
                                <a href="https://manage.bkhost.vn/cart.php?a=add&pid=226" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                            </div>
                            <div class="tag"><span>100%</span></div>
                        </div>
                    </div><!--/.promo-->

                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="Note">
                    <strong>Nội dung khuyến mại</strong>
                    <ul class="mb10">
                        <li>Để chào mừng hệ thống HOSTING SSD chất lượng cao mới, BKHOST xin gửi tới Quý khách 1000 gói Hosting Miễn Phí 100% nhằm mục đích tạo cơ hội trải nghiệm về tốc độ xử lý và tính ổn định của HOSTING cũng như dịch vụ hỗ trợ kỹ thuật 24/7 từ BKHOST. 
Từ đó, BKHOST rất mong nhận được những góp ý chân thành từ trải nghiệm đó để BKHOST được hoàn thiện hơn về chất lượng và dịch vụ, đáp ứng tốt nhu cầu của mọi khách hàng.
</li>
                    </ul>
                    <strong>Quy trình đăng ký miễn phí 100% HOSTING SSD chất lượng cao như sau:</strong>
                    <ul class="mb10">
                        <li>1. Đăng ký đơn hàng và NHẬP MÃ KHUYẾN MÃI: KMH100</li>
                        <li>2. Chụp ảnh CMND của chủ thể gửi vào mail info@bkhost.vn bằng Email đăng ký đơn hàng để BKHOST xác nhận.</li>
                        <li>3. Hoàn thành thủ tục Hệ thống sẽ kích hoạt dịch vụ và chuyển thông tin về Email khách hàng.</li>
                    </ul>
                    <strong>Thời gian và số lượng Hosting miễn phí</strong>
                    <ul class="mb10">
                        <li>Thời gian khuyến mại: Từ ngày 11/12/2017 đến 15/12/2017</li>
                        <li>Gói Hosting chất lượng cao Miễn Phí: 6 tháng (kể từ ngày đăng ký)</li>
						<li>Sau thời gian dùng thử 6 tháng hệ thống sẽ tự động gia hạn cho dịch vụ dùng thử hoặc sẽ tạm dừng nếu khách hàng không gia hạn.</li>
                        <li>Số lượng gói Hosting miễn phí 100%: 1000 gói</li>
                    </ul>
                    <strong>Điều kiện áp dụng:</strong>
                    <ul class="mb10">
                        <li>Mỗi khách hàng sử dụng 1 gói Hosting SSD chất lượng cao duy nhất</li>
                        <li>Khi đăng ký đơn hàng, Quý khách vui lòng nhập đầy đủ thông tin để BKHOST đối chiếu CMND.</li>
                        <li>Đơn hàng được kích hoạt khi Quý khách thực hiện đủ và đúng yêu cầu nêu trên</li>
                    </ul>
                    <strong>Ghi chú:</strong>
                    <ul class="mb10">
                        <li>Do số lượng khuyến mại lên đến 1000 gói Hosting và trong thời gian ngắn, dó đó BKHOST xin khởi tạo lần lượt trong vòng 40 phút và trong 
                            giờ hành chính: Buổi sáng từ 8h00 đến 12h00 – Buổi chiều từ 13h30 đến 17h00 trong các ngày khuyến mại. Những đơn hàng đăg ký sau 17h00 sẽ được BKHOST xử lí trong ngày tiếp theo</li>
                        <li>Chương trình chỉ áp dụng cho khách hàng mới và không áp dụng cho khách hàng đã có trên hệ thống BKHOST</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--END HOSTING-->
    
</div>

<?= $this->Html->css('countDown.css', ['block' => true]) ?>
<?= $this->Html->css('promo.css', ['block' => true]) ?>
<?php echo $this->Html->script(['countdown.min.js', 'moment-countdown.min.js'], ['type' => 'text/javascript', 'block' => true]); ?>
<?php echo $this->Html->script('promo.hot.js', ['type' => 'text/javascript', 'block' => true]); ?>