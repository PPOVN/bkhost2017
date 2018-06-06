<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/affiliate.ctp with your own version.');
//endif;
?>
<div class="page-intro2">
    <div class="container">
        <h1>Chính sách đại lí và Affiliate</h1>
        <p>Trở thành đại lí của BKHOST bạn sẽ được hỗ trợ toàn diện, Chương trình quản lý bằng phần mềm chuyên nghiệp, hiện đại, 
            dễ sử dụng sẽ giúp quý khách dễ dàng tập trung vào kinh doanh để phát triển doanh số cao nhất.</p>
    </div>
</div><!--/.page-intro2-->

<div class="lp-row-white t_center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/daili.png', ['alt' => 'Đại lí']) ?>
                <h3 class="title-border-bottom">Là một đại lí của BKHOST</h3>
                <p>Bạn  sở  hữu  một  thương  hiệu  riêng  của  bạn  trên  hệ thống quản lý của chúng tôi, vì vậy mà bạn có thể trực 
tiếp quản lý dịch vụ khách hàng của bạn, chúng tôi cung cấp hỗ trợ back-end và chúng tôi hoàn toàn vô 
hình  đối  với  khách  hàng  của  bạn.  Do  đó  bạn  hoàn toàn tập trung 100% cho việc kinh doanh</p>
            </div>
            <div class="col-sm-6">
                <?= $this->Html->image('frontend/affiliate.png', ['alt' => 'Đại lí']) ?>
                <h3 class="title-border-bottom">Là một đại lí của BKHOST</h3>
                <p>Bạn có thể kiếm thêm một <span style="color: #bf1718">khoản hoa hồng thụ động</span> khi bạn giới thiệu khách hàng đến BKHOST</p>
            </div>
        </div>
    </div>
</div>

<div class="why-choose-aff">
    <div class="container">
        <h2 class="title-red t_center mb50">Tại sao bạn nên làm đại lí của chúng tôi?</h2>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/taichinh.png', ['alt' => 'Thu nhập']) ?>
                <h4>Thêm nguồn thu nhập</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/giarieng.png', ['alt' => 'Bán với giá riêng của bạn']) ?>
                <h4>Bán với giá riêng của bạn</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/khongcanthue.png', ['alt' => 'Không cần phải thuên nhân viên']) ?>
                <h4>Không cần phải thuê nhân viên</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/dichvu.png', ['alt' => 'Không cần đầu tư tài chính']) ?>
                <h4>Không cần đầu tư tài chính</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/tien.png', ['alt' => 'Bổ sung cho dịch vụ hiện tại của bạn']) ?>
                <h4>Bổ sung cho dịch vụ hiện tại của bạn</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/hotro-01.png', ['alt' => 'Chúng tôi hỗ trợ bạn 24/7']) ?>
                <h4>Chúng tôi hỗ trợ bạn 24/7</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/taichinh.png', ['alt' => 'Không yêu cầu kiến thức kỹ thuật']) ?>
                <h4>Không yêu cầu kiến thức kỹ thuật</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/giarieng.png', ['alt' => 'Miễn phí dịch vụ đầu tư']) ?>
                <h4>Miễn phí dịch vụ đầu tư</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/khongcanthue.png', ['alt' => 'Nhiều lựa chọn cho dịch vụ']) ?>
                <h4>Nhiều lựa chọn cho dịch vụ</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/dichvu.png', ['alt' => 'Thu nhập không giới hạn']) ?>
                <h4>Thu nhập không giới hạn</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/tien.png', ['alt' => 'Miễn phí tham gia đại lí BKHOST']) ?>
                <h4>Miễn phí tham gia đại lí BKHOST</h4>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 t_center mb30">
                <?= $this->Html->image('frontend/hotro-01.png', ['alt' => 'Hỗ trợ kỹ thuật cao cấp']) ?>
                <h4>Hỗ trợ kỹ thuật cao cấp</h4>
            </div>
        </div>
    </div>
</div><!--/.why-choose-aff-->

<div class="lp-row-white">
    <div class="container">
        <h2 class="title-red t_center mb50">Video hướng dẫn đăng ký Đại lí</h2>
        <div class="row">
            <div class="col-sm-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/_HCX2dxzhf4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/_HCX2dxzhf4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <h2 class="title-red t_center mt50 mb50">Bảng giá đại lí BKHOST</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th style="background-color: #eeeeed">ĐẠI LÝ</th>
                    <th class="t_center t_white" style="background-color: #1f73b9">CẤP 1</th>
                    <th class="t_center t_white" style="background-color: #43b277">CẤP 2</th>
                    <th class="t_center t_white" style="background-color: #99c328">CẤP 3</th>
                    <th class="t_center t_white" style="background-color: #f6a316">CẤP 4</th>
                </tr>
                <tr>
                    <td><strong>Tổng giá trị thanh toán</strong></td>
                    <td><strong><20 triệu</strong></td>
                    <td><strong>Từ 20 đến <50 triệu</strong></td>
                    <td><strong>Từ 50 đến <100 triệu</strong></td>
                    <td><strong>>=100 triệu</strong></td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1"><strong>TÊN MIỀN VIỆT NAM</strong></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?= $this->Html->image('frontend/ten-mien-vn.jpg', ['alt' => 'Tên miền .VN']) ?> 
                        <strong>Tên miền Việt Nam cấp 2 nhiều hơn 2 ký tự  (dạng *.vn)</strong>
                    </td>
                </tr>
                <tr>
                    <td>Đăng ký mới</td>
                    <td>780.000 đ/năm</td>
                    <td>765.000 đ/năm</td>
                    <td>750.000 đ/năm</td>
                    <td>745.000 đ/năm</td>
                </tr>
                <tr>
                    <td>Gia hạn</td>
                    <td>450.000 đ/năm</td>
                    <td>440.000 đ/năm</td>
                    <td>430.000 đ/năm</td>
                    <td>420.000 đ/năm</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?= $this->Html->image('frontend/ten-mien-vn.jpg', ['alt' => 'Tên miền .VN']) ?> 
                        <strong>Tên miền Việt Nam cấp 3 bao gồm 1, 2 và nhiều ký tự (dạng .com.vn, .net.vn, .biz.vn)</strong>
                    </td>
                </tr>
                <tr>
                    <td>Đăng ký mới</td>
                    <td>680.000 đ/năm</td>
                    <td>665.000 đ/năm</td>
                    <td>650.000 đ/năm</td>
                    <td>645.000 đ/năm</td>
                </tr>
                <tr>
                    <td>Gia hạn</td>
                    <td>330.000 đ/năm</td>
                    <td>320.000 đ/năm</td>
                    <td>310.000 đ/năm</td>
                    <td>300.000 đ/năm</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?= $this->Html->image('frontend/ten-mien-vn.jpg', ['alt' => 'Tên miền .VN']) ?> 
                        <strong>Tên miền Việt Nam cấp 3 bao gồm 1, 2 và nhiều ký tự (dạng .edu.vn, .gov.vn, .ac.vn, .info.vn, .pro.vn, 
                            .health.vn, .int.vn và tên miền theo địa giới hành chính)</strong>
                    </td>
                </tr>
                <tr>
                    <td>Đăng ký mới</td>
                    <td>530.000 đ/năm</td>
                    <td>520.000 đ/năm</td>
                    <td>510.000 đ/năm</td>
                    <td>500.000 đ/năm</td>
                </tr>
                <tr>
                    <td>Gia hạn</td>
                    <td>195.000 đ/năm</td>
                    <td>185.000 đ/năm</td>
                    <td>175.000 đ/năm</td>
                    <td>165.000 đ/năm</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?= $this->Html->image('frontend/ten-mien-vn.jpg', ['alt' => 'Tên miền .VN']) ?> 
                        <strong>Tên miền Việt Nam cấp 3 bao gồm 1,2 và nhiều ký tự (dạng .name.vn)</strong>
                    </td>
                </tr>
                <tr>
                    <td>Đăng ký mới</td>
                    <td>60.000 đ/năm</td>
                    <td>60.000 đ/năm</td>
                    <td>60.000 đ/năm</td>
                    <td>60.000 đ/năm</td>
                </tr>
                <tr>
                    <td>Gia hạn</td>
                    <td>30.000 đ/năm</td>
                    <td>30.000 đ/năm</td>
                    <td>30.000 đ/năm</td>
                    <td>30.000 đ/năm</td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1"><strong>TÊN MIỀN QUỐC TẾ</strong></td>
                </tr>
                <tr>
                    <td>.com / .net / .us / .biz</td>
                    <td>220.000 đ/năm</td>
                    <td>215.000 đ/năm</td>
                    <td>210.000 đ/năm</td>
                    <td>205.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.org / .info</td>
                    <td>230.000 đ/năm</td>
                    <td>225.000 đ/năm</td>
                    <td>220.000 đ/năm</td>
                    <td>215.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.co.uk / .eu / .name</td>
                    <td>230.000 đ/năm</td>
                    <td>225.000 đ/năm</td>
                    <td>220.000 đ/năm</td>
                    <td>215.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.tel / .pro / .asia</td>
                    <td>330.000 đ/năm</td>
                    <td>320.000 đ/năm</td>
                    <td>310.000 đ/năm</td>
                    <td>300.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.mobi</td>
                    <td>437.000 đ/năm</td>
                    <td>432.000 đ/năm</td>
                    <td>428.000 đ/năm</td>
                    <td>424.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.me / .tv</td>
                    <td>650.000 đ/năm</td>
                    <td>645.000 đ/năm</td>
                    <td>640.000 đ/năm</td>
                    <td>630.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.cc</td>
                    <td>670.000 đ/năm</td>
                    <td>665.000 đ/năm</td>
                    <td>660.000 đ/năm</td>
                    <td>650.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.co</td>
                    <td>750.000 đ/năm</td>
                    <td>745.000 đ/năm</td>
                    <td>740.000 đ/năm</td>
                    <td>735.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.nu / .ws</td>
                    <td>696.000 đ/năm</td>
                    <td>681.000 đ/năm</td>
                    <td>676.000 đ/năm</td>
                    <td>661.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.bz</td>
                    <td>670.000 đ/năm</td>
                    <td>650.000 đ/năm</td>
                    <td>645.000 đ/năm</td>
                    <td>635.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.xxx</td>
                    <td>2.890.000 đ/năm</td>
                    <td>2.790.000 đ/năm</td>
                    <td>2.690.000 đ/năm</td>
                    <td>2.590.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.com.tw</td>
                    <td>1.080.000 đ/năm</td>
                    <td>1.050.000 đ/năm</td>
                    <td>1.030.000 đ/năm</td>
                    <td>1.000.000 đ/năm</td>
                </tr>
                <tr>
                    <td>.jp</td>
                    <td>2.225.000 đ/năm</td>
                    <td>2.220.000 đ/năm</td>
                    <td>2.210.000 đ/năm</td>
                    <td>2.205.000 đ/năm</td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1;color: #bf1718"><strong>DỊCH VỤ LƯU TRỮ HOSTING SSD</strong></td>
                </tr>
                <tr>
                    <th class="t_center" style="background-color: #eeeeed">ĐẠI LÝ</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 1</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 2</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 3</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 4</th>
                </tr>
                <tr>
                    <td><strong>Tổng giá trị nạp vào</strong></td>
                    <td class="t_center"><strong><20 triệu</strong></td>
                    <td class="t_center"><strong>Từ 20 đến <50</strong></td>
                    <td class="t_center"><strong>Từ 50 đến <100</strong></td>
                    <td class="t_center"><strong>>=100 triệu</strong></td>
                </tr>
                <tr>
                    <td>Chiết khấu</td>
                    <td class="t_center">25%</td>
                    <td class="t_center">30%</td>
                    <td class="t_center">35%</td>
                    <td class="t_center">40%</td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1;color: #bf1718"><strong>DỊCH VỤ MÁY CHỦ ẢO (CLOUD VPS)</strong></td>
                </tr>
                <tr>
                    <th class="t_center" style="background-color: #eeeeed">ĐẠI LÝ</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 1</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 2</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 3</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 4</th>
                </tr>
                <tr>
                    <td><strong>Tổng giá trị nạp vào</strong></td>
                    <td class="t_center"><strong><20 triệu</strong></td>
                    <td class="t_center"><strong>Từ 20 đến <50</strong></td>
                    <td class="t_center"><strong>Từ 50 đến <100</strong></td>
                    <td class="t_center"><strong>>=100 triệu</strong></td>
                </tr>
                <tr>
                    <td>Chiết khấu</td>
                    <td class="t_center">12%</td>
                    <td class="t_center">13%</td>
                    <td class="t_center">14%</td>
                    <td class="t_center">15%</td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1;color: #bf1718"><strong>EMAIL DOANH NGHIỆP - GOOGLE APPS</strong></td>
                </tr>
                <tr>
                    <th class="t_center" style="background-color: #eeeeed">ĐẠI LÝ</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 1</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 2</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 3</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 4</th>
                </tr>
                <tr>
                    <td><strong>Tổng giá trị nạp vào</strong></td>
                    <td class="t_center"><strong><20 triệu</strong></td>
                    <td class="t_center"><strong>Từ 20 đến <50</strong></td>
                    <td class="t_center"><strong>Từ 50 đến <100</strong></td>
                    <td class="t_center"><strong>>=100 triệu</strong></td>
                </tr>
                <tr>
                    <td>Chiết khấu</td>
                    <td class="t_center">6%</td>
                    <td class="t_center">7%</td>
                    <td class="t_center">8%</td>
                    <td class="t_center">10%</td>
                </tr>
                <tr>
                    <td colspan="5" class="t_center" style="background-color: #f2f2f1;color: #bf1718"><strong>DEDICATED SERVER VÀ COLOCATION</strong></td>
                </tr>
                <tr>
                    <th class="t_center" style="background-color: #eeeeed">ĐẠI LÝ</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 1</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 2</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 3</th>
                    <th class="t_center" style="background-color: #eeeeed">CẤP 4</th>
                </tr>
                <tr>
                    <td><strong>Tổng giá trị nạp vào</strong></td>
                    <td class="t_center"><strong><20 triệu</strong></td>
                    <td class="t_center"><strong>Từ 20 đến <50</strong></td>
                    <td class="t_center"><strong>Từ 50 đến <100</strong></td>
                    <td class="t_center"><strong>>=100 triệu</strong></td>
                </tr>
                <tr>
                    <td>Chiết khấu</td>
                    <td class="t_center">3%</td>
                    <td class="t_center">3%</td>
                    <td class="t_center">4%</td>
                    <td class="t_center">5%</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="other-services">
    <div class="container">
        <span>Đăng ký <strong>làm đại lí</strong> với chúng tôi ngay hôm nay</span>
        <a href="<?= $this->Url->build(['controller' => 'Contact', 'action' => 'index']) ?>" class="btn">ĐĂNG KÝ NGAY</a>
    </div>
</div><!--/.other-services-->