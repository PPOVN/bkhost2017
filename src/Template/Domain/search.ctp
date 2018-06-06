<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/search.ctp with your own version.');
//endif;
?>
<div class="domain-checker-box">
    <div class="container">
        <span class="person"></span>
        <h3>Tìm <strong>Tên miền</strong> cho Website của bạn</h3>
        <div class="form-wrap1">
            <div class="form-wrap">
                <form action="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'search']) ?>" method="post">
                    <div style="overflow: hidden;margin-bottom: 15px">
                        <input type="text" name="domain" value="<?php echo (isset($_POST['domain']))?$_POST['domain']:"" ?>" placeholder="Bắt đầu tìm kiếm tên miền của bạn..." />
                        <button class="btn btn-submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> TÌM KIẾM</button>
                        <a class="btn btn-success btn-transfer" href="https://manage.bkhost.vn/cart.php?a=add&domain=transfer" target="_blank">
                            <i class="fa fa-reply" aria-hidden="true"></i> Transfer
                        </a>
                    </div>
                    <div class="domain-ltd">
                        <label><input type="checkbox" name="tld[]" value="com" <?php echo (in_array("com", $tlds))?"checked":"" ?> /> .com</label>
                        <label><input type="checkbox" name="tld[]" value="com.vn" <?php echo (in_array("com.vn", $tlds))?"checked":"" ?> /> .com.vn</label>
                        <label><input type="checkbox" name="tld[]" value="vn" <?php echo (in_array("vn", $tlds))?"checked":"" ?> /> .vn</label>
                        <label><input type="checkbox" name="tld[]" value="net" <?php echo (in_array("net", $tlds))?"checked":"" ?> /> .net</label>
                        <label><input type="checkbox" name="tld[]" value="net.vn" <?php echo (in_array("net.vn", $tlds))?"checked":"" ?> /> .net.vn</label>
                        <label><input type="checkbox" name="tld[]" value="biz" <?php echo (in_array("biz", $tlds))?"checked":"" ?> /> .biz</label>
                        <label><input type="checkbox" name="tld[]" value="biz.vn" <?php echo (in_array("biz.vn", $tlds))?"checked":"" ?> /> .biz.vn</label>
                        <label><input type="checkbox" name="tld[]" value="info" <?php echo (in_array("info", $tlds))?"checked":"" ?> /> .info</label>
                        <label><input type="checkbox" name="tld[]" value="org" <?php echo (in_array("org", $tlds))?"checked":"" ?> /> .org</label>
                        <label><input type="checkbox" name="tld[]" value="us" <?php echo (in_array("us", $tlds))?"checked":"" ?> /> .us</label>
                        <label><input type="checkbox" name="tld[]" value="edu.vn" <?php echo (in_array("edu.vn", $tlds))?"checked":"" ?> /> .edu.vn</label>
                        <label><input type="checkbox" name="tld[]" value="pro.vn" <?php echo (in_array("pro.vn", $tlds))?"checked":"" ?> /> .pro.vn</label>
                        <label><input type="checkbox" name="tld[]" value="gov.vn" <?php echo (in_array("gov.vn", $tlds))?"checked":"" ?> /> .gov.vn</label>
                        <label><input type="checkbox" name="tld[]" value="name" <?php echo (in_array("name", $tlds))?"checked":"" ?> /> .name</label>
                        <label><input type="checkbox" name="tld[]" value="xyz" <?php echo (in_array("xyz", $tlds))?"checked":"" ?> /> .xyz</label>
                        <label><input type="checkbox" name="tld[]" value="shop" <?php echo (in_array("shop", $tlds))?"checked":"" ?> /> .shop</label>
                        <label><input type="checkbox" name="tld[]" value="asia" <?php echo (in_array("asia", $tlds))?"checked":"" ?> /> .asia</label>
                        <label><input type="checkbox" name="tld[]" value="cc" <?php echo (in_array("cc", $tlds))?"checked":"" ?> /> .cc</label>
                        <label><input type="checkbox" name="tld[]" value="eu" <?php echo (in_array("eu", $tlds))?"checked":"" ?> /> .eu</label>
                        <label><input type="checkbox" name="tld[]" value="ws" <?php echo (in_array("ws", $tlds))?"checked":"" ?> /> .ws</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.domain-checker-box-->

<div class="container">
    <div class="price-domain-table">
        <div class="primary-domain t_center"><?=$result_domain_check?></div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th><span><b>Tên miền</b></span></th>
                    <th class="t_center"><span><b>Trạng thái</b></span></th>
                    <th class="t_center"><span><b>Thông tin</b></span></th>
                </tr>
                <?=$result?>
            </table>
        </div>
    </div>
</div>
<style type="text/css">
.modal-body {
    padding:20px;
    max-height: 600px;
    overflow: auto;
}
.price-domain-table {padding: 30px 0}
.price-domain-table .table th{
    border-color: #c72027;
    background: #C72027;
    color: #fff;
    text-transform: uppercase;
}
.price-domain-table .table tr th:last-child {
    width: 200px
}
.price-domain-table .table td{
    vertical-align: middle
}
.price-domain-table .table td .btn{
    color: #fff;
    font-weight: normal;
    border-radius: 0
}
.price-domain-table .label{
    font-size: 100%;
    font-weight: normal;
}
.bg-red {
  background-color: #e02222 !important;
  background-image: none !important;
}
.bg-green {
  background-color: #35aa47 !important;
  background-image: none !important;
}
@media(max-width: 480px){
    .price-domain-table .table tr th:last-child {width: auto}
}
</style>
<div class="modal fade" id="modalResult" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog"> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">THÔNG TIN TÊN MIỀN</h4>
      </div>
	  <div class="modal-body"></div>
    </div>
  </div>
</div>

<div class="hosting-system system-features domain-features">
    <div class="container">
        <h3 class="block-title"><span>TÍNH NĂNG</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-dns.png', ['alt' => 'Quản lý DNS']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>QUẢN LÝ DNS</h3>
                            <p>Cập nhật thông tin tên miền một cách dễ dàng bằng hệ hống của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-renew.png', ['alt' => 'Gia hạn']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>TỰ ĐỘNG GIA HẠN</h3>
                            <p>Đừng lo lắng về việc mất miền quý giá bằng hệ thống tự động cập nhật!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-email-hosting.png', ['alt' => 'Email']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>ĐỊA CHỈ EMAIL CHUYÊN NGHIỆP</h3>
                            <p>Có bí danh địa chỉ email giới thiệu tên thương hiệu của bạn!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3">
                            <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Đăng ký nhanh']) ?>
                        </div>
                        <div class="col-xs-9">
                            <h3>THỦ TỤC ĐĂNG KÝ NHANH GỌN</h3>
                            <p>Thủ tục đăng ký tên miền của bạn sẽ được triển khai đơn giản, nhanh gọn nhưng bảo mật cao quyền sở hữu tên miền.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/.hosting-system-->

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>