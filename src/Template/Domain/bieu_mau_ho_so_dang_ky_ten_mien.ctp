<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/bieu_mau_ho_so_dang_ky_ten_mien.ctp with your own version.');
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
                        <h1>BIỂU MẪU HỒ SƠ ĐĂNG KÝ TÊN MIỀN</h1>
                        <h3>Biểu mẫu dành cho đăng ký tên miền Việt Nam và Quốc tế</h3>
                        <p>Quý khách vui lòng Download biểu mẫu phù hợp từ Website Bkhost, Sau đó điền thông tin vào biểu mẫu và 
                            gửi lại cho nhân viên chăm sóc khách hàng của BKHOST.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-briefcase" aria-hidden="true"></i> Mẫu dành cho cơ quan, tổ chức, doanh nghiệp</h2>
        <div class="table-responsive t_left">
            <table class="table table-striped table-bordered">
                <tr>
                    <th colspan="2">Bản khai đăng ký tên miền</th>
                </tr>
                <tr>
                    <td>Bản khai thay đổi thông tin tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị thay đổi tên chủ thể tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị hoàn trả tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <th colspan="2">Mẫu dành cho cá nhân</th>
                </tr>
                <tr>
                    <td>Bản khai đăng ký tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Bản khai thay đổi thông tin tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị thay đổi tên chủ thể tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị hoàn trả tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <th colspan="2">Mẫu dành cho cơ quan, tổ chức đăng ký tên miền dưới “.GOV.VN”</th>
                </tr>
                <tr>
                    <td>Bản khai đăng ký tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Bản cam kết và giải trình về việc đăng ký tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Bản khai thay đổi thông tin tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị hoàn trả tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <th colspan="2">Mẫu chuyển đổi nhà đăng ký</th>
                </tr>
                <tr>
                    <td>Chuyển từ nhà đăng ký khác về P.A Vietnam Ltd</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <th colspan="2">Mẫu đăng ký bảo vệ tên miền</th>
                </tr>
                <tr>
                    <td>Đơn đăng ký bảo vệ tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị thay đổi thông tin tên miền bảo vệ</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
                <tr>
                    <td>Đơn đề nghị giữ chỗ tên miền</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> TẢI VỀ</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>