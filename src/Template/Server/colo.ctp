<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Server/colo.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content pdl15">
                <h2>Kế hoạch thuê chỗ đặt Server</h2>
                <blockquote>
                    <h3>Tin cậy, an toàn, hiệu xuất cao</h3>
                    <p>Bạn cần chỗ đặt cho một Server, nửa rack, hoặc 1 tủ colocation? BKHOST có thể đối tác của bạn - chúng tôi cung cấp 
                       với hiệu xuất, an toàn, tin cậy và chúng tôi luôn đem lại cho bạn sự an tâm khi sử dụng dịch vụ.</p>
                </blockquote>
            </div>
        </div>
    </div>
</div><!--/.hosting-intro-->

<div class="specifications">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td style="width: 17%"></td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">Colo 1</div>
                            <div class="pkg-desc">DataCenter đạt chuẩn Quốc tế Tier 3</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">Colo 2</div>
                            <div class="pkg-desc">DataCenter đạt chuẩn Quốc tế Tier 3</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">Colo 3</div>
                            <div class="pkg-desc">DataCenter đạt chuẩn Quốc tế Tier 3</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">Colo 4</div>
                            <div class="pkg-desc">DataCenter đạt chuẩn Quốc tế Tier 3</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">Colo 5</div>
                            <div class="pkg-desc">DataCenter đạt chuẩn Quốc tế Tier 3</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Phí khởi tạo</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td colspan="5"><span class="val val-even">Miễn phí</span></td>
                </tr>
                <tr>
                    <td style="color:#bf1718">
                        <span class="rn">Giá cước (đ/tháng)</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td style="color:#bf1718"><span class="val val-odd bold">1.490.000</span></td>
                    <td style="color:#bf1718"><span class="val val-odd bold">1.850.000</span></td>
                    <td style="color:#bf1718"><span class="val val-odd bold">2.300.000</span></td>
                    <td style="color:#bf1718"><span class="val val-odd bold">2.750.000</span></td>
                    <td style="color:#bf1718"><span class="val val-odd bold">4.900.000</span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title4"><span>Thông tin chi tiết</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Chuẩn không gian</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">01 U</span></td>
                    <td><span class="val val-even">02 U</span></td>
                    <td><span class="val val-even">01 U</span></td>
                    <td><span class="val val-even">01 U</span></td>
                    <td><span class="val val-even">05 U</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Công xuất điện</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">400 W</span></td>
                    <td><span class="val val-odd">500 W</span></td>
                    <td><span class="val val-odd">400 W</span></td>
                    <td><span class="val val-odd">400 W</span></td>
                    <td><span class="val val-odd">900 W</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Băng thông trong nước</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">100 Mbps</span></td>
                    <td><span class="val val-even">100 Mbps</span></td>
                    <td><span class="val val-even">200 Mbps</span></td>
                    <td><span class="val val-even">300 Mbps</span></td>
                    <td><span class="val val-even">400 Mbps</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Băng thông quốc tế</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">10 Mbps</span></td>
                    <td><span class="val val-odd">10 Mbps</span></td>
                    <td><span class="val val-odd">15 Mbps</span></td>
                    <td><span class="val val-odd">20 Mbps</span></td>
                    <td><span class="val val-odd">30 Mbps</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Lưu lượng truyền tải</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td colspan="5"><span class="val val-even">Không giới hạn</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Ô cắm mạng</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">100 Mbps</span></td>
                    <td><span class="val val-odd">100 Mbps</span></td>
                    <td><span class="val val-odd">1 Gbps</span></td>
                    <td><span class="val val-odd">1 Gbps</span></td>
                    <td><span class="val val-odd">1 Gbps</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=199" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=200" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
					<td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=201" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=202" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=203" class="btn btn-warning">ĐĂNG KÝ</a></span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title5"><span>Dịch vụ bổ sung</span></div></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-even t_left">Tăng thêm 1U cho server</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 240.000 đ/ 01 U / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-odd t_left">Tăng công suất điện cho Server (block 50W)</span></td>
                    <td colspan="2"><span class="val val-odd t_left">+ 105.000 đ/ 01 block / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" rowspan="3"><span class="val val-even t_left pdt56 pdb56">Bổ sung băng thông trong nước không thêm cổng</span></td>
                    <td><span class="val val-even t_left">Block 100 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 100 Mbps = + 960.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even t_left">Block 500 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 500 Mbps = + 4.550.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even t_left">Block 500 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 1 Gbps = + 8.400.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-odd t_left">Bổ sung băng thông quốc tế không thêm cổng</span></td>
                    <td colspan="2"><span class="val val-odd t_left">+ 5 Mbps = + 2.700.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" rowspan="3"><span class="val val-even t_left pdt56 pdb56">Bổ sung băng thông trong nước dùng riêng</span></td>
                    <td><span class="val val-even t_left">Block 1 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 100 Mbps = + 17,000.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even t_left">Block 2 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 500 Mbps = + 32.000.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="val val-even t_left">Block 5 Gbps</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 5 Gbps = + 75.450.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-odd t_left">Bổ sung băng thông quốc tế dùng riêng</span></td>
                    <td colspan="2"><span class="val val-odd t_left">+ 5 Mbps = + 12.000.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-even t_left">Bổ sung địa chỉ IP</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 01 IP = + 85.000 đ / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-odd t_left">Thêm không gian đặt thiết bị (Block 1U, 50W)</span></td>
                    <td colspan="2"><span class="val val-odd t_left">+ 400.000 đ / 1 Block / tháng</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3"><span class="val val-even t_left">Thêm kết nối LAN</span></td>
                    <td colspan="2"><span class="val val-even t_left">+ 600.000 đ/ 01 cổng 01Gbps/ tháng</span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title2"><span>Hỗ trợ kỹ thuật 24/7</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hỗ trợ kỹ thuật 24/7</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-even"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Network SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                    <td><span class="val val-odd">99.9%</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hardware SLA</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                    <td><span class="val val-even">99.9%</span></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="specifications-row-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="t_center mb15"><?= $this->Html->image('frontend/icon-time-black.png', ['alt' => 'Time']) ?></div>
                <div>BKHOST đảm bảo băng thông cao cấp cho phép bạn để phục vụ các ứng dụng, nội dung, và các trang web 
                    ở tốc độ cao mà không lo lắng về giới hạn</div>
            </div>
            <div class="col-sm-4">
                <div class="t_center mb15"><?= $this->Html->image('frontend/icon-power-black.png', ['alt' => 'Power']) ?></div>
                <div>Hệ thống điện an toàn với máy biến áp chuyên dụng và máy phát điện, và hỗ trợ bởi một 230-volt 
                    cung cấp điện liên tục với khả năng dự phòng đầy đủ</div>
            </div>
            <div class="col-sm-4">
                <div class="t_center mb15"><?= $this->Html->image('frontend/icon-lock-black.png', ['alt' => 'Lock']) ?></div>
                <div>Hỗ trợ 24/7 với hệ thống của bạn, chúng tôi cung cấp KVM để bạn luôn chủ động điều hành Server từ xa cho dù 
                    Server bị tắt.</div>
            </div>
        </div>
    </div>
</div><!--/.specifications-row-gray-->

<div class="other-services">
    <div class="container">
        <span>Đăng ký <strong>dịch vụ khác</strong> kèm theo Colocation của bạn?</span>
        <a href="<?= $this->Url->build(['controller' => 'Order', 'action' => 'index']) ?>" class="btn" target="_blank">ĐĂNG KÝ NGAY</a>
    </div>
</div><!--/.other-services-->