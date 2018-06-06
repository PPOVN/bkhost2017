<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/ssl.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/SSl-bkhost.png', ['alt' => 'SSl']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>SSL Certificate for Website</h1>
                        <h3>Offer guarantees to customers today</h3>
                        <p>By using the web SSL certificate, you can help encrypt your client's information before it is sent over the Internet, 
						protecting their interests and boosting their confidence in your site.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="ssl-why">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Why would you need a SSL from BKHOST?</h3>
                <p>Website security is optimal to your online business’s success, but it is still one of the most overlooked element when businesses 
				are creating their online presence. If your digital business collects any important customer details, such as personal information, 
				credit card details and more, you should look at having a SSL certificate to safeguard their information. What’s more, visitors will 
				definitely feel more at ease when they see the “Green Lock” or “Green Bar” in the address bar when visiting your site.</p>
                <p>Provide your customers with a blue background address and you will reveice more order from reputed converstion</p>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Protect your visitors when they:</strong></p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Register for an account on your website</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Provide personal and credit card information</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Sign in to your members’ portal</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Complete a transaction</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>SSL Technical Details:</strong></p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Encrypt your online transactions</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Data encryption up to 256-bits</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Protection from spoofing and phishing</p>
                        <p><i class="fa fa-check-square" aria-hidden="true"></i> Authentication</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight-box">
                    <h3>Instill belief in your visitors</h3>
                    <p>Visitors won’t complete their transaction or fill up a form unless they know their personal information is secure. Having a SSL certificate from BKHOST is the affordable and simple way to secure your website and increase sales.</p>
                    <p><a href="#" title="Registration SSL" class="btn">Registration</a></p>
                    <p class="italic">Fast<strong>SSL @ Start 250K / year</strong></p>
                </div>
            </div>
        </div>
    </div>
</div><!--/.ssl-why-->

<div class="ssl-demo">
    <div class="container">
        <h3 class="block-title"><span>What does having SLL look like?</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <h3>Basic SSL</h3>
                <?= $this->Html->image('frontend/demo-ssl1.png', ['alt' => 'SSl']) ?>
            </div>
            <div class="col-sm-6">
                <h3>Basic with Extended Validation (EV)</h3>
                <?= $this->Html->image('frontend/demo-ssl2.png', ['alt' => 'SSl']) ?>
            </div>
        </div>
    </div>
</div><!--/.ssl-demo-->

<div class="hosting-columns hosting-columns2 ssl-pkgs">
    <div class="container">
        <h3 class="block-title"><span>SSL certificate packages</span></h3>
        <div class="col-sm-6">
            <h3 class="title-blue">COMODO SSL</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>POSITIVESSL</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication<strong>DV</strong></li>
                        <li>SAN <strong>No support</strong></li>
                        <li>Insurrance <strong>10.000 USD</strong></li>
                        <li>Blue browser <strong>Do not have</strong></li>
                        <li>The number of domains <strong>01</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>250K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=204" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>POSITIVESSL MULTI-DOMAIN</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication <strong>DV</strong></li>
                        <li>SAN <strong>support</strong></li>
                        <li>Insurrance <strong>10.000 USD</strong></li>
                        <li>Blue browser <strong>Do not have</strong></li>
                        <li>The number of domains <strong>03</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>1.500K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=205" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header column-header-blue">
                    <span>EV SSL</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication <strong>EV</strong></li>
                        <li>SAN <strong>No support</strong></li>
                        <li>Insurrance <strong>1.750.000 USD</strong></li>
                        <li>Blue browser <strong>have</strong></li>
                        <li>The number of domains <strong>01</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>2.400K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=206" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-6">
            <h3 class="title-red">GEOTRUS SSL</h3>
            <div class="clearfix"></div>
            <div class="hosting-column hosting-column-3">
                <div class="column-header">
                    <span>TRUEBUSINESSID</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication <strong>OV</strong></li>
                        <li>SAN <strong>No support</strong></li>
                        <li>Insurrance <stron>1.250.000 USD</stron></li>
                        <li>Blue browser <strong>Do not have</strong></li>
                        <li>The number of domains <strong>01</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>2.100K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=207" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3">
                <div class="column-header">
                    <span>TRUEBUSINESSID EV</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication <strong>DV</strong></li>
                        <li>SAN <strong>No support</strong></li>
                        <li>Insurrance <stron>1.500.000 USD</stron></li>
                        <li>Blue browser <strong>have</strong></li>
                        <li>The number of domains <strong>01</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>4.300K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=208" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="hosting-column hosting-column-3 last">
                <div class="column-header">
                    <span>TRUEBUSINESSID EV SAN</span>
                </div>
                <div class="column-body">
                    <ul>
                        <li>Authentication <strong>DV</strong></li>
                        <li>SAN <strong>support</strong></li>
                        <li>Insurrance <stron>1.425.000 USD</stron></li>
                        <li>Blue browser <strong>have</strong></li>
                        <li>The number of domains <strong>05</strong></li>
                    </ul>
                </div>
                <div class="column-footer">
                    <div class="price"><span>7.900K</span>1 year</div>
                    <div class="promo-code">Registration<strong>today</strong></div>
                    <a href="https://manage.bkhost.vn/cart.php?a=add&pid=209" class="btn btn-warning">Registration</a>
                </div>
            </div><!--/.hosting-column-->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<?= $this->element('other_services2') ?>