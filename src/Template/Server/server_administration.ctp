<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/server_administration.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/server-admin.png', ['alt' => 'Quản trị máy chủ']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">Dịch vụ quản trị máy chủ</h1>
                        <h3>Đỗi ngũ kỹ thuật chuyên môn cao tại BKHOST</h3>
                        <p>Với đội ngũ kỹ thuật chuyên môn cao về hệ thống tại BKHOST sẽ hỗ trợ bạn trong quá trình vận hành máy chủ, Điều 
                            này sẽ luôn tiện dụng cho bạn khi không phải thuê một người với chi phí cao và chuyên môn không như mong muốn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="hosting-columns email-pkgs">
    <div class="container">
        <div class="hosting-column hosting-column-4 hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>THUÊ 1 THÁNG</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">Thuê 1 tháng tiện lợi thời gian<br/>Nhưng chi phí phù hợp</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.100K</span>/Tháng</div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4">
            <div class="column-header">
                <span>THUÊ 3 THÁNG</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">Thuê 3 tháng chủ động cho kế hoạch<br/>Chí phí vừa phải</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.000K</span>/Tháng</div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4">
            <div class="column-header">
                <span>THUÊ 6 THÁNG</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">Thuê 6 tháng kế hoạch dài hơn<br/>Chi phí thấp hơn</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>900K</span>/Tháng</div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4 last">
            <div class="column-header">
                <span>THUÊ 12 THÁNG</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">Thuê 12 tháng luôn chủ động công việc<br/>Chi phí thấp nhất</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>800K</span>/Tháng</div>
                <a href="#" class="btn btn-warning">Đăng ký</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="server-admin-info pdb30">
    <div class="container">
        <h3 class="block-title"><span>Thông tin dịch vụ quản trị máy chủ</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>NỘI DUNG CÁC CÔNG VIỆC THÔNG THƯỜNG</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><span>Hỗ trợ kiểm tra phát hiện lỗi web server, database, email server do phía BKHOST cài đặt</span></li>
                                <li><span>Cập nhật các bản cập nhật, vá lỗi của phần mềm do phía BKHOST cài đặt và Hệ điều hành (nếu có và tương thích).</span></li>
                                <li><span>Hỗ trợ cài đặt bảo mật server ở cấp ứng dụng: set up antivirus, firewall software theo hệ điều hành.</span></li>
                                <li><span>Restart dịch vụ apache, mysql, email server thông qua ssh và control panel.</span></li>
                                <li><span>Hướng dẫn cấu hình backup dựa trên các công cụ hỗ trợ sẵn có của control panel hosting backup trên local HDD khi khách hàng yêu cầu.</span></li>
                                <li><span>Hướng dẫn restore dữ liệu từ các bản sao lưu dữ liệu (nếu có)để khôi phục hoạt động của website.</span></li>
                                <li><span>Hướng dẫn khôi phục lại hoạt động của website trong trường hợp: server quá tải, lỗi phần cứng, dịch vụ bị treo, lỗi hệ thống.</span></li>
                                <li><span>Không xử lý sửa lỗi nếu do các tác động từ phía người sử dụng gây ra lỗi, trường hợp này BKHOST chỉ hỗ trợ hướng dẫn khách tìm lổi.</span></li>
                                <li><span>Không hỗ trợ các phần mềm của khách hàng tự cài đặt và các mã nguồn do phía khách hàng triển khai</span></li>
                                <li><strong>Hỗ trợ khách hàng trong việc quản trị Hosting control panel:</strong><br>
                                    <span>- Tạo Template</span><br/>
                                    <span>- Tạo / Xóa Host</span><br/>
                                    <span>- Cấu hình DNS</span><br/>
                                    <span>- Park domain</span><br/>
                                    <span><em>(BKHOST chỉ thực hiện demo quản trị cho 1 hosting, sau đó hướng dẫn khách hàng tự thực hiện cho các hosting khác)</em></span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>NỘI DUNG CÁC CÔNG VIỆC CAO CẤP</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><span>Hỗ trợ restore dữ liệu từ các bản sao lưu dữ liệu (nếu có)để khôi phục hoạt động của website.</span></li>
                                <li><span>Hỗ trợ khôi phục lại hoạt động của web server trong trường hợp: server quá tải, lỗi phần cứng, dịch vụ bị treo, lỗi hệ thống.</span></li>
                                <li><span>Hướng dẫn cài đặt các phần mềm và dịch vụ khác theo yêu cầu khách hàng. Chỉ cài đặt các phần mềm được hỗ trợ đầy đủ, có license và tương thích với hệ điều hành của server.</span></li>
                                <li><span>Cấu  hình  tối  ưu  Web  server,  Database  server,  OS  nhằm  giảm  thiểu  hao  tốn  tài  nguyên server. - Hỗ trợ cấu hình bảo mật server ở cấp hệ thống.</span></li>
                                <li><span>Hỗ trợ khách hàng chống các đợt tấn công botnet vừa và nhỏ: cài firewall trên server, ngăn chặn kết 
                                        nối tấn công <em>(Chú ý: nếu mạng botnet lớn thì server vẫn có thể bị ảnh hưởng)</em>. - Tư vấn về mức độ 
                                        bảo mật của mã nguồn khách hàng đang sử dụng.</span></li>
                                <li><span>Tư vấn khách hàng về bảo mật trong quá trình sử dụng server.</span></li>
                                <li><span>Đảm bảo sự tương thích về cấu hình ứng dụng giữa server cũ và server mới <em>(nếu khách hàng chuyển dịch vụ từ nơi khác về)</em>.</span></li>
                                <li><span>Hỗ trợ kiểm tra các lỗi xảy ra ở cấp ứng dụng trong quá trình sử dụng.</span></li>
                                <li><span>Tư vấn khách hàng ứng dụng các giải pháp tốt nhất với dịch vụ khách hàng đang sử dụng.</span></li>
                                <li><span>Không xử lý sửa lỗi nếu do các tác động từ phía người sử dụng gây ra lỗi, trường hợp này BKHOST chỉ hỗ trợ hướng dẫn khách tìm lổi</span></li>
                                <li><span>Không hỗ trợ các phần mềm của khách hàng tự cài đặt và các mã nguồn do phía khách hàng triển khai.</span></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><!--/.server-admin-info-->

<div class="lp-row-gray">
    <div class="container">
        <p><strong style="color:#bf1718">Phối hợp với khách hàng:</strong></p>
        <p>- BKHOST sẽ có trách nhiệm thông báo cho khách hàng về các ứng dụng mình cài đặt thêm nếu có.<br/>
            - Lưu giữ các thông tin account root và thông tin quản trị liên quan.<br/>
        - Khách hàng cần thông báo cho phía BKHOST về các cập nhật từ phía khách hàng liên quan đến server nếu có.</p>
        <p><strong style="color:#bf1718">Các vấn đề mà BKHOST sẽ không hỗ trợ:</strong></p>
        <p>- Server bị quá tải do tài nguyên server không đủ để đáp ứng nhu cầu sử dụng của các ứng dụng mà khách hàng đang cài đặt và sử dụng trên máy chủ.<br/>
            - Khách hàng tự can thiệp và cài đặt làm hư hệ thống mà không thông báo cho phía kỹ thuật BKHOST<br/>
            - Can thiệp trực tiếp vào mã nguồn website của khách hàng để khắc phục lỗi <em>(lỗi không do máy chủ gây ra)</em>.<br/>
            - Yêu cầu cài đặt các ứng dụng chưa được hỗ trợ đầy đủ hay vượt quá khả năng kinh nghiệm của bộ phận kỹ thuật BKHOST.<br/>
            - Yêu cầu nghiên cứu, tích hợp một giải pháp chưa được hỗ trợ đầy đủ hoặc vượt quá khả năng kinh nghiệm của bộ phận kỹ thuật BKHOST.<br/>
            - BKHOST sẽ không chịu trách nhiệm về dữ liệu bên trong server, khách hàng cần có chính sách backup dữ liệu cho riêng mình.<br/>
        - Khách hàng sử dụng vi phạm các điều khoản sử dụng dịch vụ của BKHOST.</p>
    </div>
</div>

<?= $this->element('other_services2') ?>