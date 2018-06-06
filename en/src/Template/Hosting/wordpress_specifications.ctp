<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Hosting/wordpress_specifications.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div class="hosting-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content pdl15">
                <h2>Hosting WordPress</h2>
                <blockquote>
                    <h3>Powerful hosting designed for WordPress</h3>
                    <p>WordPress hosting is specifically designed for websites that use open source WordPress for maximum speed and security. 
					Sign up and verify today!</p>
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
                            <div class="pkg-name">BK-WP01</div>
                            <div class="pkg-desc">Perfect hosting plan for your website!</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-WP02</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-WP03</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-WP04</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                    <td style="width: 16%">
                        <div class="column-header">
                            <div class="pkg-name">BK-WP05</div>
                            <div class="pkg-desc">Get more storage space and email for your website.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Storage capacity</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd bold">700 MB</span></td>
                    <td><span class="val val-odd bold">1,5 GB</span></td>
                    <td><span class="val val-odd bold">2,5 GB</span></td>
                    <td><span class="val val-odd bold">4 GB</span></td>
                    <td><span class="val val-odd bold">8 GB</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Bandwidth</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">20 GB</span></td>
                    <td><span class="val val-even">50 GB</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24/7 technical support</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hosting system in Vietnam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=184" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=185" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=186" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=187" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-even"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=188" class="btn btn-warning">Registration</a></span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title1"><span>Features of Hosting</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Features of Hosting</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Subdomains</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">5</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                    <td><span class="val val-even">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">FTP Accounts</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                    <td><span class="val val-odd">Unlimited</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Addon Domains</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1</span></td>
                    <td><span class="val val-even">2</span></td>
                    <td><span class="val val-even">4</span></td>
                    <td><span class="val val-even">6</span></td>
                    <td><span class="val val-even">10</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Parked Domains</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                    <td><span class="val val-odd"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Server OS</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                    <td><span class="val val-even">Linux</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hosting syste</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                    <td><span class="val val-odd">Việt Nam</span></td>
                </tr>
                <tr>
                    <td colspan="6"><div class="block-title block-title2"><span>24/7 technical support</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24/7 technical support</span>
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
                <tr>
                    <td colspan="6"><div class="block-title block-title3"><span>Price</span></div></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Initialization fee, Install</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                    <td><span class="val val-odd">Free</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">6 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">300k/month</span></td>
                    <td><span class="val val-even">480k/month</span></td>
                    <td><span class="val val-even">840k/month</span></td>
                    <td><span class="val val-even">1.140k/month</span></td>
                    <td><span class="val val-even">1.168k/month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">12 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd">600k/month</span></td>
                    <td><span class="val val-odd">960k/month</span></td>
                    <td><span class="val val-odd">1.680k/month</span></td>
                    <td><span class="val val-odd">2.280k/month</span></td>
                    <td><span class="val val-odd">3.360k/month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">24 month payment</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-even">1.200k/month</span></td>
                    <td><span class="val val-even">1.920k/month</span></td>
                    <td><span class="val val-even">3.360k/month</span></td>
                    <td><span class="val val-even">4.560k/month</span></td>
                    <td><span class="val val-even">6.720k/month</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="rn">Hosting system in Vietnam</span>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=184" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=185" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=186" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=187" class="btn btn-warning">Registration</a></span></td>
                    <td><span class="val val-odd"><a href="https://manage.bkhost.vn/cart.php?a=add&pid=188" class="btn btn-warning">Registration</a></span></td>
                </tr>
            </table>
        </div>
        <div class="t_center">
            <a href="<?php echo SITE_URL ?>/hosting/wordpress" class="btn-view-full">
                <span class="txt">&lt; HOSTING PACKAGES</span>
                <span class="icon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </a>
        </div>
    </div>
</div>

<?= $this->element('other_services') ?>