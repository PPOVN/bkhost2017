<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/domain_search_box.ctp with your own version.');
//endif;
?>
<div class="form-wrap1">
    <div class="form-wrap">
        <form action="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'search']) ?>" method="post">
            <div style="overflow: hidden">
                <input type="text" name="domain" value="<?php echo (isset($_POST['domain']))?$_POST['domain']:"" ?>" placeholder="Bắt đầu tìm kiếm tên miền của bạn..." />
                <button class="btn btn-submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> TÌM KIẾM</button>
                <a class="btn btn-success btn-transfer" href="https://manage.bkhost.vn/cart.php?a=add&domain=transfer" target="_blank">
                    <i class="fa fa-reply" aria-hidden="true"></i> Transfer
                </a>
            </div>
            <div class="domain-ltd" style="display: none">
                <label><input type="checkbox" name="tld[]" value="com" checked /> .com</label>
                <label><input type="checkbox" name="tld[]" value="com.vn" checked /> .com.vn</label>
                <label><input type="checkbox" name="tld[]" value="vn" checked /> .vn</label>
                <label><input type="checkbox" name="tld[]" value="net" checked /> .net</label>
                <label><input type="checkbox" name="tld[]" value="net.vn" checked /> .net.vn</label>
                <label><input type="checkbox" name="tld[]" value="biz" /> .biz</label>
                <label><input type="checkbox" name="tld[]" value="biz.vn" /> .biz.vn</label>
                <label><input type="checkbox" name="tld[]" value="info" /> .info</label>
                <label><input type="checkbox" name="tld[]" value="org" /> .org</label>
                <label><input type="checkbox" name="tld[]" value="us" /> .us</label>
                <label><input type="checkbox" name="tld[]" value="edu.vn" /> .edu.vn</label>
                <label><input type="checkbox" name="tld[]" value="pro.vn" /> .pro.vn</label>
                <label><input type="checkbox" name="tld[]" value="gov.vn" /> .gov.vn</label>
                <label><input type="checkbox" name="tld[]" value="name" /> .name</label>
                <label><input type="checkbox" name="tld[]" value="xyz" /> .xyz</label>
                <label><input type="checkbox" name="tld[]" value="shop" /> .shop</label>
                <label><input type="checkbox" name="tld[]" value="asia" /> .asia</label>
                <label><input type="checkbox" name="tld[]" value="cc" /> .cc</label>
                <label><input type="checkbox" name="tld[]" value="eu" /> .eu</label>
                <label><input type="checkbox" name="tld[]" value="ws" /> .ws</label>
            </div>
        </form>
    </div>
</div>