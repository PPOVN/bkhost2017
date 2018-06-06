<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/index.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/software.png', ['alt' => 'Software']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>DANH SÁCH PHẦN MỀM CHO HỆ THỐNG SERVER</h1>
                        <h3>Danh sách các phần mềm bản quyền dành cho dịch vụ máy chủ</h3>
                        <p>Chúng tôi cung cấp các phần mềm chuyên biệt cho những hệ thống VPS, Server vật lý như: Cpanel, DirectAdmin, Plesk, LiteSpeed, Cloud Linux...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="software-tabs">
    <div class="container">
        <div id="software_tabs">
            <ul>
                <li><a href="#tab1" title="Cloud Linux">Cloud Linux</a></li>
                <li><a href="#tab2" title="Cpanel">Cpanel</a></li>
                <li><a href="#tab3" title="DirectAdmin">DirectAdmin</a></li>
                <li><a href="#tab4" title="Litespeed">Litespeed</a></li>
                <li><a href="#tab5" title="Paralleels Plesk">Paralleels Plesk</a></li>
            </ul>
            <div id="tab1">
                <h3>Cloud Linux</h3>
                <p>Là hệ điều hành *Nix đầu tiên, được thiết kế dành riêng cho nhu cầu lưu trữ web, đặc biệt là phục vụ nhu cầu của các 
                    nhà cung cấp Hosting (Hosting Provider). Cloud Linux sử dụng công nghệ LVE (Lightweight Virtual Environments – 
                    Tạo môi trường ảo hóa) tạo nên sự đột phá trong viêc quản lý, chia sẻ tài nguyên máy chủ cho các tài khoản người dùng.</p>
                <p>Trên CloudLinux, khách hàng được giới hạn tài nguyên % CPU Load. Thông thường với CentOS, một user có thể chạy full 
                    99,9% CPU cho process của website, nhưng ở đây, con số này bị giới hạn lại theo cấu hình của nhà cung cấp. Điều này 
                    nhằm đảm bảo chắc chắn rằng, hosting, website của bạn bỏ chi phí ra thuê sẽ không bị ảnh hưởng bởi một người nào đó 
                    trên cùng server, kể cả trong trường hợp các cuộc tấn công DDOS nhỏ và vừa.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 tháng</th>
                            <th>03 tháng</th>
                            <th>06 tháng</th>
                            <th>12 tháng</th>
                            <th>Đặt mua</th>
                        </tr>
                        <tr>
                            <th class="green">CloudLinux - Internal</th>
                            <td>210.000</td>
                            <td>630.000</td>
                            <td>1.260.000</td>
                            <td>2.100.000 (Tiết kiệm 420.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=143" title="Đặt mua Cloud Linux" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">CloudLinux - External</th>
                            <td>252.000</td>
                            <td>756.000</td>
                            <td>1.512.000</td>
                            <td>2.520.000 (Tiết kiệm 504.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=144" title="Đặt mua Cloud Linux" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab2" style="display: none">
                <h3>Bản quyền Cpanel</h3>
                <strong>Phần mềm quản trị cPanel là gì?</strong>
                <p>cPanel là một hệ thống quản lý dành riêng cho máy chủ lưu trữ web. cPanel có nhiều tính năng mạnh mẽ và tạo cho quản trị 
                    viên khả năng can thiệp sâu và chính xác hơn đối với các thiết lập quy định khả năng khai thác tài nguyên máy chủ. 
                    Tính năng của hệ thống cPanel được phân chia thành 2 cấp độ là tài khoản đại lý và tài khoản quyền root (cao nhất). 
                    Việc phân chia cấp độ cho phép người quản trị lọc bớt các chức năng không cần thiết hoặc ít sử dụng trong một giao diện 
                    quản lý thường xuyên sử dụng và phục vụ cả mục đích đào tạo đối với người mới sử dụng.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 tháng</th>
                            <th>03 tháng</th>
                            <th>06 tháng</th>
                            <th>12 tháng</th>
                            <th>Đặt mua</th>
                        </tr>
                        <tr>
                            <th class="green">VPS - Internal</th>
                            <td>294.000</td>
                            <td>882.000</td>
                            <td>1.764.000</td>
                            <td>3.360.000 (Tiết kiệm 168.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=146" title="Đặt mua Cpanel" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">VPS - External</th>
                            <td>315.000</td>
                            <td>945.000</td>
                            <td>1.890.000</td>
                            <td>3.675.000 (Tiết kiệm 105.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=147" title="Đặt mua Cpanel" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Server - Internal</th>
                            <td>910.000</td>
                            <td>2.730.000</td>
                            <td>5.250.000</td>
                            <td>9.450.000 (Tiết kiệm 1.050.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=148" title="Đặt mua Cpanel" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab3" style="display: none">
                <h3>DirectAdmin (gọi tắt là DA)</h3>
                <p>Là một phần mềm hệ thống xây dựng trên nền hệ điều hành Linux phục vụ cho mục đích quản trị máy chủ lưu trữ website 
                    chia sẻ (shared hosting). Nó vừa nhẹ nhàng, đơn giản lại rất tiện dụng cho người dùng. Hệ thống quản lý này không chỉ 
                    cho phép người dùng cuối quản trị mà còn hỗ trợ cả các tài khoản đại lý. Sản phẩm sử dụng giao diện web và cung cấp các 
                    tính năng quản trị tốt cho những nhà cung cấp dịch vụ lưu trữ web (hosting provider), đại lý và người dùng cuối.</p>
                <p>Điểm mạnh của DirectAdmin là khả năng tối ưu hóa quản lý, sử dụng lượng tài nguyên ít và độ bảo mật cao. Trước khi 
                    cài đặt DirectAdmin, bạn phải đảm bảo rằng VPS đã được đăng kí bản quyền DirectAdmin. Ngoài ra nó có phiên bản 
                    dành cho VPS cũng đầy đủ chức năng như phiên bản dành cho Server, nhưng được tối ưu hóa để chạy ít tốn bộ nhớ nhất, 
                    đối với DirectAdmin, bạn có thể cài lên bất kỳ máy ảo dạng nào và hưởng mức phí bản quyền dành cho VPS thấp nhất.</p>
                <p><strong>Tính năng cơ bản</strong></p>
                <p>Dễ dàng trong quản lý : DA là một hệ thống dành riêng cho các máy chủ chia sẻ, rất dễ dàng trong việc 
                    phân chia và quản lý tài nguyên máy chủ.<br/>
                    Tốc độ: DA là hệ thống quản lý nhanh và không đòi hỏi nhiều về tài nguyên so với các hệ thống quản lý máy chủ chia sẻ khác.<br/>
                Tin cậy: Hệ thống sẽ được phục hồi sau các sự cố nhằm hạn chế thời gian hệ thống hoạt động mà không tạo ra hiệu quả. 
                DA tự động khởi động lại các dịch vụ cần thiết khi dịch vụ đó bị lỗi.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 tháng</th>
                            <th>03 tháng</th>
                            <th>06 tháng</th>
                            <th>12 tháng</th>
                            <th>Đặt mua</th>
                        </tr>
                        <tr>
                            <th class="green">Máy chủ ảo - VPS</th>
                            <td>300.000</td>
                            <td>550.000</td>
                            <td>1.000.000</td>
                            <td>1.900.000 (Tiết kiệm 100.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=149" title="Đặt mua DirectAdmin" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Máy chủ riêng</th>
                            <td>350.000</td>
                            <td>600.000</td>
                            <td>1.100.000</td>
                            <td>1.900.000 (Tiết kiệm 300.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=150" title="Đặt mua DirectAdmin" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Lifetime</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2.300.000 đ (Bản quyền vĩnh viễn)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=151" title="Đặt mua DirectAdmin" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab4" style="display: none">
                <h3>LITESPEED</h3>
                <p>LiteSpeed webserver (LSWS) là một trong những webserver hoạt động trên nền tảng Linux cóhiệu suất hoạt động cao và 
                    nhanh nhất hiện nay, qua một quá trình phát triển khá dài (từ 2002) cho đến nay đã khẳng định khả năng xử lý vượt trội 
                    hơn hẳn so với Apache, tốc độ xử lý file tĩnh của LSWS có thể nhanh hơn gấp 6 lần so với Apache, tốc độ xử lý PHP trên 
                    LSWS có thể tăng từ 1,5 lần đến 3 lần so với Apache.</p>
                <p>Với việc quản lý tốt tài nguyên sử dụng CPU/Memory là một trong những ưu điểm nổi bật của Litespeed ngay cả trong trường 
                    hợp các website có lượng truy cập lớn, linh hoạt trong vấn đề chuyển đổi từ Apache webserver sang Litespeed webserver, 
                    giảm thiểu tình trạng “nghẽn cổ chai” do Apache không thể đáp ứng được lượng truy cập lớn trong cùng một thời điểm.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 tháng</th>
                            <th>03 tháng</th>
                            <th>06 tháng</th>
                            <th>12 tháng</th>
                            <th>Đặt mua</th>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - Enterprise<br/>(Dành cho VPS < 2GB RAM)</th>
                            <td>380.000</td>
                            <td>1.050.000</td>
                            <td>1.900.000</td>
                            <td>3.500.000 (Tiết kiệm 300.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=152" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - Ultra<br/>(Dành cho VPS có RAM 2-8 GB)</th>
                            <td>520.000</td>
                            <td>1.560.000</td>
                            <td>2.890.000</td>
                            <td>5.040.000 (Tiết kiệm 740.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=153" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 01 CPU<br/>(Dành cho VPS > 8GB RAM)</th>
                            <td>780.000</td>
                            <td>2.300.000</td>
                            <td>4.500.000</td>
                            <td>7.929.000 (Tiết kiệm 1.071.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=154" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 02 CPU</th>
                            <td>1.250.000</td>
                            <td>3.536.000</td>
                            <td>6.570.000</td>
                            <td>12.500.000 đ (Tiết kiệm 640.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=155" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 04 CPU</th>
                            <td>1.600.000</td>
                            <td>4.500.000</td>
                            <td>8.980.000</td>
                            <td>16.980.000 (tiết kiệm 980.000đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=156" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 08 CPU</th>
                            <td>2.432.000</td>
                            <td>6.520.000</td>
                            <td>12.690.000</td>
                            <td>22.980.000 (tiết kiệm 2.400.000đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=157" title="Đặt mua Litespeed" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab5" style="display: none">
                <h3>PARALLELS PLESK PANEL</h3>
                <strong>Bản quyền Parallels Plesk</strong>
                <p>Ứng dụng quản trị Web Hosting hàng đầu dành cho máy chủ chạy hệ điều hành Windows Server.<br/>
                Parallels Plesk là giải pháp tối ưu và tiết kiệm nhất cho việc quản trị Máy chủ, Máy chủ ảo (VPS) và Hosting. 
                Plesk là phần mềm quản lý hosting chuyên nghiệp hàng đầu thế giới của Parallels được nhiều nhà cung cấp dịch vụ 
                Server, VPS, Web Hosting, Domain… tin dùng. Tính năng tự động hóa cao giúp các doanh nghiệp giảm chi phí, thời gian 
                trong việc quản lý, đầu tư thiết bị và nhân lực.</p>
                <p>Plesk là một hệ thống quản lý máy chủ do Parallels phát triển , có thể hoạt động trên 2 hệ điều hành Window & Linux, 
                    nhờ sự linh động và đa dạng hóa trong cơ cấu hoạt động trên các hệ điều hành thông dụng, Plesk đã phát triển mạnh mẽ 
                    và được nhiều doanh nghiệp lựa chọn cho giải pháp quản lý máy chủ, hệ thống quản lý được phân cấp rõ ràng cùng với 
                    khả năng bảo mật và can thiệp sâu vào hệ thống giúp cho plesk dễ dàng quản lý và phân cấp người sử dụng, với giao diện 
                    quản lý thân thiện vista, plesk ngày càng khẳng định được vị thế và lựa chọn số một trong việc quản lý máy chủ hiện nay.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>VPS<br/>vnđ/tháng</th>
                            <th>Đặt mua (VPS)</th>
                            <th>Server<br/>vnđ/tháng</th>
                            <th>Đặt mua (Server)</th>
                        </tr>
                        <tr>
                            <th class="green">Web Host Edition (Unlimited Domains)<br/>
                            (Đăng ký tối thiểu 3 tháng)</th>
                            <td>375.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=145" title="Đặt mua VPS" class="btn btn-danger">Đăng ký ngay</a></td>
                            <td>850.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=159" title="Đặt mua Server" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Web Pro Edition (30 Domains)<br/>
                            (Đăng ký tối thiểu 3 tháng)</th>
                            <td>275.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=160" title="Đặt mua VPS" class="btn btn-danger">Đăng ký ngay</a></td>
                            <td>385.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=158" title="Đặt mua Server" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Web Admin Edition (10 Domains) – sử dụng thêm Power Pack cho Windows<br/>
                            (Đăng ký tối thiểu 6 tháng)</th>
                            <td>49.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=162" title="Đặt mua VPS" class="btn btn-danger">Đăng ký ngay</a></td>
                            <td>49.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=163" title="Đặt mua Server" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                        <tr>
                            <th class="green">Plesk Power Pack<br/>
                                (Quản lý PgSQL, MSSQL, Tomcat,ColdFusion)<br/>
                            Phần mềm Plesk không chịu thuế VAT</th>
                            <td>95.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=164" title="Đặt mua VPS" class="btn btn-danger">Đăng ký ngay</a></td>
                            <td>210.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=165" title="Đặt mua Server" class="btn btn-danger">Đăng ký ngay</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--/.software-tabs-->