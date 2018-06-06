<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/about.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <?= $this->Html->image('frontend/thanhvien-bkhost.png', ['alt' => 'Thành viên BKHOST']) ?>
                    </div>
                    <div class="col-sm-9">
                        <h1 style="text-transform:none">VỀ BKHOST?</h1>
                        <h3>Nhà cung cấp thuộc TOP dịch vụ trên Internet</h3>
                        <p class="font15">BKHOST luôn đem đến những dịch vụ trên Internet cho 
						các cá nhân và doanh nghiệp trong nước và quốc tế. Chúng tôi tin tưởng sẽ đem đến các giải pháp CNTT mới nhất, tối ưu nhất, hiệu quả nhất và chi phí hợp lý nhất cho tất cả các doanh nghiệp với mọi quy mô.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb30">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/_HCX2dxzhf4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 mb30">
                <h2 class="title-red bold mt0 mb30">Hiểu hơn về BKHOST</h2>
                <p class="font16">BKHOST.vn  là  nhà  cung  cấp  dịch  vụ  trên  Internet  thuộc  TOP  tại  Việt Nam,  chúng  tôi  hỗ  trợ  hơn  3.500  công  ty  và  11.000  người  sử  dụng. 
BKHOST cung cấp uy tín, chất lượng cho các giải pháp dịch vụ trên Internet như: Tên miền, hosting, Email Server, Cloud VPS, Máy chủ, Colo
cation, An ninh và giải pháp mạng, tất cả được chúng tôi hỗ trợ liên tục 24/24.</p>
                <p class="font16">Với  việc  tập  trung  vào  kỹ  thuật  tiên  tiến  và  nhanh  chóng,  am  hiểu 
khách hàng, BKHOST luôn đem đến sự hài lòng cho khách hàng khi sử dụng dịch vụ của chúng tôi.</p>
                <p class="font18 bold"><a href="<?= $this->Url->build(['controller' => 'Contact', 'action' => 'index']) ?>" target="_blank">Liên hệ</a> 
                    hoặc gọi cho chúng tôi <a href="tel:+842462591442"><i class="fa fa-phone" aria-hidden="true"></i> +84 24 6259 1442</a> để biết thêm thông tin</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb30">
                <div class="about-vision">
                    <div class="pull-left bg-red">
                        <?= $this->Html->image('frontend/icon-eye.png', ['alt' => 'Tầm nhìn']) ?> 
                        <span>Tầm nhìn</span>
                    </div>
                    <div class="pull-left right">
                        BKHOST là nhà cung cấp dịch vụ trên Internet thuộc TOP 3 trong năm 2018 tại Việt Nam
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb30">
                <div class="about-vision">
                    <div class="pull-left bg-red">
                        <?= $this->Html->image('frontend/icon-eye.png', ['alt' => 'Tầm nhìn']) ?> 
                        <span>Sứ mệnh</span>
                    </div>
                    <div class="pull-left right">
                        Support Là Sứ Mệnh Của Chúng Tôi
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hosting-system lp-row-gray">
    <div class="container">
        <h2 class="title-red bold t_center mb30">BKHOST có thể làm gì cho bạn?</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-setup.png', ['alt' => 'Setup']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Tăng cường tốc độ</h3>
                        <p>Hạ tầng đạt chuẩn Quốc tế với tốc độ băng thông cực cao sẽ đem đến tốc độ truy suất không giới hạn.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hỗ trợ dịch vụ khách hàng 24/24</h3>
                        <p>Chúng tôi hỗ trợ đăng ký dịch vụ mới và hỗ trợ kỹ thuật 24/24 bất kỹ thời gian nào. Hãy liên hệ với chúng tôi 
                            bởi chúng tôi luôn có nhân viên trực hỗ trợ.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/icon-hdd.png', ['alt' => 'HDD']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Phần cứng mạnh mẽ</h3>
                        <p>Chúng tôi liên tục đầu tư vào các phần cứng mới nhất, đảm bảo rằng bạn sẽ có được hiệu suất tốt nhất và ổn định cao.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/congcu-bkhost.png', ['alt' => 'Đem đến sự yên tâm']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>Đem đến sự yên tâm</h3>
                        <p>Nếu bạn đang tìm kiếm một nhà cung cấp dịch vụ Uy tín trên Internet thì chắc chắn rằng bạn sẽ thấy chúng tôi và 
                            chúng tôi sẽ đem đến dịch vụ tốt nhất cho bạn.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<div class="lp-row-white">
    <div class="container">
        <h2 class="title-red bold t_center mb30">Thành viên BKHOST</h2>
        <p class="mb50 font16 t_center">Để phục vụ cho công việc hỗ trợ khách hàng của chúng tôi, BKHOST đã có nhiều chương trình đào tạo 
            nâng cao năng lực chuyên môn kỹ thuật cho đội ngũ nhân viên. Tính đến tháng 9 năm 2017, BKHOST có hơn 15 kỹ sư 
            hệ thống, chăm sóc khách hàng và đội ngũ cộng tác viên chuyên nghiệp hỗ trợ cho bạn.</p>
        <h3 class="t_center mb50 bold">Những người nắm giữ quản lý chủ chốt của chúng tôi</h3>
        <div class="row">
            <div class="col-sm-6 mb30">
                <div class="row">
                    <div class="col-xs-3">
                        <?= $this->Html->image('members/mrthanh.png', ['alt' => 'Trịnh Duy Thanh']) ?>
                    </div>
                    <div class="col-xs-9 pdl0">
                        <h4 class="mt0 bold">Trịnh Duy Thanh | <span class="title-red">CEO</span></h4>
                        <p style="text-align: justify">Mr Thanh là CEO của BKHOST Việt Nam, ông chịu trách 
nhiệm về định hướng cũng như chiến lược cho sự phát triển thương hiệu của BKHOST Việt Nam.</p>
                        <p style="text-align: justify">Quyết  liệt  và  đam  mê  với  CNTT,  Mr  Thanh  luôn  là  người  tiên  phong  đưa  tới những sản phẩm CNTT mới nhất đến Quý vị.</p>
                        <p style="text-align: justify">Mr Thanh có năng lực lãnh đạo, tinh thần kinh doanh và sẵn sàng chấp nhận 
rủi ro cao giúp BKHOST Việt Nam sẽ trở thành một trong những nhà cung cấp dịch vụ trên Internet uy tín và tin cậy tại Việt Nam</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb30">
                <div class="row">
                    <div class="col-xs-3">
                        <?= $this->Html->image('members/hop.png', ['alt' => 'Quách Đình Hợp']) ?>
                    </div>
                    <div class="col-xs-9 pdl0">
                        <h4 class="mt0 bold">Quách Đình Hợp | <span class="title-red">Product Development Research</span></h4>
                        <p style="text-align: justify">Mr. Hợp chịu trách nhiệm quản lý nghiên cứu phát triển sản phẩm, hoạt động 
cơ sở hạ tầng hệ thống, hỗ trợ kỹ thuật và chăm sóc khách hàng cho BKHOST.</p>
                        <p style="text-align: justify">Với sự nhạy bén trong quản lý của mình, Mr Hợp luôn làm việc chặt chẽ với 
các bộ phận của BKHOST, đảm bảo rằng hệ thống luôn đem đến dịch vụ hoạt động được ổn định nhất đến khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6 mb30">
                <div class="row">
                    <div class="col-xs-3">
                        <?= $this->Html->image('members/nguyen.png', ['alt' => 'Nguyễn Đình Nguyện']) ?>
                    </div>
                    <div class="col-xs-9 pdl0">
                        <h4 class="mt0 bold">Nguyễn Đình Nguyện | <span class="title-red">Manager Technical </span></h4>
                        <p style="text-align: justify">Kinh  nghiệm,  chuyên  môn  giỏi,  am  hiểu  toàn  bộ  hệ  thống  từ  Network  đến 
System, do đó Mr Nguyện luôn trả lời mọi sự thắc mắc về kỹ thuật liên quan đến 
dịch vụ BKHOST. Không chỉ vậy Mr Nguyện luôn am hiểu nguyện vọng của bạn khi đầu tư mua dịch vụ của chúng tôi.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb30">
                <div class="row">
                    <div class="col-xs-3">
                        <?= $this->Html->image('members/lananh.png', ['alt' => 'Trần Lan Anh']) ?>
                    </div>
                    <div class="col-xs-9 pdl0">
                        <h4 class="mt0 bold">Trần Lan Anh | <span class="title-red">Manager Sales BK</span></h4>
                        <p style="text-align: justify">Ms Lan Anh là một nhân tố được nhiều khách hàng BKHOST hài lòng, có kinh 
nghiệm hỗ trợ tư vấn dịch vụ cho khách hàng tuyệt vời nhất. Ms Lan Anh không 
những hiểu từng dịch vụ mà còn hiểu từng nguyện vọng của khách hàng khi 
được tiếp xúc. Ms Lan Anh luôn đen đến nụ cười tuyệt vời nhất đến Quý vị.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="lp-row-gray partner-technical">
    <div class="container">
        <h2 class="title-red bold t_center mb30">Đối tác công nghệ</h2>
        <p class="t_center font15 mb50">Với sự phát triển không ngừng, BKHOST luôn chủ động trong việc hợp tác với các doanh nghiệp chiến lược để thực hiện sứ mệnh của mình
		đó là đem lại những sản phẩm tốt nhất cho khách hàng.</p>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/logoviettel.png', ['alt' => 'Viettel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>ĐỐI TÁC CHÍNH THỨC VIETTEL IDC</h3>
                        <p>Chúng tôi là một đối tác của Viettel IDC, Cung cấp các  hạ  tầng  Colocation  với  tiêu  chuẩn  Tier  3, 
Chúng tôi được phép cung cấp các giải pháp về Network, Bảo mật...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/cPanel-logo.png', ['alt' => 'Cpanel']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>ĐỐI TÁC CHÍNH THỨC CPANEL</h3>
                        <p>Là đối tác chiến lược với Cpanel, Chúng tôi có toàn quyền cung cấp dịch vụ quản lý Hosting cho các đơn vị, cá nhân muốn triển khai hệ thống...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/VMWARE.png', ['alt' => 'VMWARE']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>ĐỐI TÁC CHÍNH THỨC VMWARE</h3>
                        <p>Nền tảng công nghệ VMWARE luôn là đỉnh cao của Ảo hóa, chúng tôi được thừa hưởng chương trình hợp tác toàn diện với họ để cung cấp sản phẩm Cloud VPS tuyệt vời...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="col-xs-3">
                        <?= $this->Html->image('frontend/DirectAdmin-Logo.png', ['alt' => 'DirectAdmin']) ?>
                    </div>
                    <div class="col-xs-9">
                        <h3>ĐỐI TÁC CHÍNH THỨC DIRECT ADMIN</h3>
                        <p>Là đối tác chiến lược với nhà cung cấp hệ thống quản trị Hosting Direct Admin, BKHOST luôn tự hào khi làm đại diện chính thức...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.partner-technical-->
