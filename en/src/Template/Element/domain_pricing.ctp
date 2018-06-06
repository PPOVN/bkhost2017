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
                    <span>Did you own the domain?</span> Buy more of our Hosting today!
                </div>
            </div>
            <div class="col-md-4 col-sm-4 t_center">
                <a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'personal']) ?>" class="btn">Register now</a>
            </div>
        </div>
    </div>
</div><!--/.domain-register-box-->

<div class="domain-tabs" id="pricing">
    <div class="container">
        <div id="software_tabs">
            <ul>
                <li><a href="#tab1" title="Tên miền Quốc tế">Domain international</a></li>
                <li><a href="#tab2" title="Tên miền Việt Nam">Domain Vietnam</a></li>
            </ul>
            <div id="tab1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Domain</th>
                            <th>Domain Pricing (USD/year)</th>
                        </tr>
                        <tr>
                            <td>.com</td>
                            <td>13 USD</td>
                        </tr>
						<tr>
                            <td>.xyz</td>
                            <td>15 USD</td>
                        </tr>
                        <tr>
                            <td>.net</td>
                            <td>13 USD</td>
                        </tr>
                        <tr>
                            <td>.info</td>
                            <td>14 USD</td>
                        </tr>
                        <tr>
                            <td>.biz</td>
                            <td>14 USD</td>
                        </tr>
                        <tr>
                            <td>.org</td>
                            <td>14 USD</td>
                        </tr>
                        <tr>
                            <td>.us</td>
                            <td>13 USD</td>
                        </tr>
						 <tr>
                            <td>.cc</td>
                            <td>38 USD</td>
                        </tr>
						 <tr>
                            <td>.asia</td>
                            <td>20 USD</td>
                        </tr>
						<tr>
                            <td>.eu</td>
                            <td>14 USD</td>
                        </tr>
						<tr>
                            <td>.me</td>
                            <td>31 USD</td>
                        </tr>
						<tr>
                            <td>.tel</td>
                            <td>17 USD</td>
                        </tr>
						<tr>
                            <td>.ws</td>
                            <td>14 USD</td>
                        </tr>
						<tr>
                            <td>.name</td>
                            <td>14 USD</td>
                        </tr>
						<tr>
                            <td>.tv</td>
                            <td>45 USD</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab2" style="display: none">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Domain</th>
                            <th>installation fee (USD/1 first year)</th>
                            <th>Charge only fee (USD/year)</th>
                        </tr>
                        <tr>
                            <td>.vn</td>
                            <td>18 USD</td>
                            <td>24 USD</td>
                        </tr>
                        <tr>
                            <td>.com.vn</td>
                            <td>18 USD</td>
                            <td>18 USD</td>
                        </tr>
                        <tr>
                            <td>.net.vn</td>
                            <td>18 USD</td>
                            <td>18 USD</td>
                        </tr>
                        <tr>
                            <td>.biz.vn</td>
                            <td>13 USD</td>
                            <td>13 USD</td>
                        </tr>
                        <tr>
                            <td>.info.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
                        <tr>
                            <td>.org.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.gov.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.edu.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.pro.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.int.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.ac.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.health.vn</td>
                            <td>10 USD</td>
                            <td>18 USD</td>
                        </tr>
						<tr>
                            <td>.name.vn</td>
                            <td>2 USD</td>
                            <td>2 USD</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--/.domain-tabs-->