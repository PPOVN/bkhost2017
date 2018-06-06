<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/domain_pricing.ctp with your own version.');
//endif;
?>
<div class="domain-register-box hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm"><span class="gift"></span></div>
            <div class="col-md-5 col-sm-8">
                <div class="txt">
                    <span>Bạn đã sở hữu tên miền?</span> Hãy mua thêm Hosting của chúng tôi ngay hôm nay!
                </div>
            </div>
            <div class="col-md-4 col-sm-4 t_center">
                <a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'personal']) ?>" class="btn">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div><!--/.domain-register-box-->

<div class="domain-tabs" id="pricing">
    <div class="container">
        <div id="software_tabs">
            <ul>
                <li><a href="#tab1" title="Tên miền Quốc tế">Tên miền Quốc tế</a></li>
                <li><a href="#tab2" title="Tên miền Việt Nam">Tên miền Việt Nam</a></li>
            </ul>
            <div id="tab1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Tên miền</th>
                            <th>Bảng giá tên miền (VNĐ/năm)</th>
                        </tr>
                        <tr>
                            <td>.com, .net, .us</td>
                            <td>250k</td>
                        </tr>
						<tr>
                            <td>.org, .info, .biz, .ws, .name, .eu</td>
                            <td>270k</td>
                        </tr>
                        <tr>
                            <td>.co.in, .net.in, .org.in, .firm.in, .gen.in, .ind.in</td>
                            <td>240k</td>
                        </tr>
                        <tr>
                            <td>.cc</td>
                            <td>760k</td>
                        </tr>
                        <tr>
                            <td>.tv</td>
                            <td>890k</td>
                        </tr>
                        <tr>
                            <td>.mobi, .com.co, .net.co, .nom.co</td>
                            <td>450k</td>
                        </tr>
                        <tr>
                            <td>.asia</td>
                            <td>400k</td>
                        </tr>
						 <tr>
                            <td>.me</td>
                            <td>610k</td>
                        </tr>
						 <tr>
                            <td>.tel</td>
                            <td>340k</td>
                        </tr>
						<tr>
                            <td>.co</td>
                            <td>780k</td>
                        </tr>
						<tr>
                            <td>.in</td>
                            <td>470k</td>
                        </tr>
						<tr>
                            <td>.co.uk, .org.uk, .ltd.uk, .plc.uk, .me.uk</td>
                            <td>360k</td>
                        </tr>
						<tr>
                            <td>.com.tw, .idv.tw, .game.tw, .ebiz.tw, .club.tw</td>
                            <td>800k</td>
                        </tr>
						<tr>
                            <td>.tw</td>
                            <td>933k</td>
                        </tr>
						<tr>
                            <td>.jp</td>
                            <td>2.340k</td>
                        </tr>
						<tr>
                            <td>.photography, .technology, .photos, .equipment, .gallery, .graphics, .lighting, .directory, .today, .tips, .company, .systems, .management, .center, .support, .email, .solutions</td>
                            <td>458k</td>
                        </tr>
						<tr>
                            <td>.land, .bike, .clothing, .plumbing, .singles, .camera, .estate, .contractors, .construction, .kitchen, .enterprises, .tattoo, .shoes, .sexy, .domains, .academy, .computer, .training, .builders</td>
                            <td>694k</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab2" style="display: none">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Tên miền</th>
                            <th>Phí khởi tạo (VNĐ/1 năm đầu)</th>
                            <th>Phí duy trì (VNĐ/năm)</th>
                        </tr>
                        <tr>
                            <td>.vn</td>
                            <td>280k</td>
                            <td>470k</td>
                        </tr>
                        <tr>
                            <td>.com.vn, .net.vn, .biz.vn, .gov.vn, .org.vn, .edu.vn, .pro.vn, .int.vn, .ac.vn, .info.vn, .health.vn</td>
                            <td>290k</td>
                            <td>340k</td>
                        </tr>
                        <tr>
                            <td>.name.vn</td>
                            <td>25k</td>
                            <td>45k</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--/.domain-tabs-->