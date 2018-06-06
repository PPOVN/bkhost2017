<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden"><?= $title ?></h1>
<div class="domain-checker-box">
    <div class="container">
        <span class="person"></span>
        <h3>Search <strong> Domain name </strong> for your Website </h3>
        <?= $this->element('domain_search_box') ?>
    </div>
</div><!--/.domain-checker-box-->

<div class="overview">
    <div class="container">
        <div class="wrap">
            <?= $this->Html->image('frontend/overview.png', ['alt' => 'overview']) ?>
            <a class="we" data-title="Our Super Support 24/7 always suport you any time!"></a>
            <a class="hardware" data-title="High performance server system gives you the best service!"></a>
            <a class="software" data-title="Enhanced security, maximum speed for your website and email!"></a>
            <a class="network" data-title="DataCenter always delivers maximum speed and 99.9% time of day!"></a>
            <span class="txt bold"></span>
        </div>
    </div>
</div><!--/.overview-->

<div class="home-services">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-hosting.jpg', ['alt' => 'Hosting']) ?>
                        <h3 class="small-title">Complete management</h3>
                        <h2 class="title">Web Hosting</h2>
                    </div>
                    <div class="body">
                        <p class="description">Affordable, The Website is set up fast and is powered by our Super Support 24/7.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Suport 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Good price</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Easy to upgrade and downgrade</p>
                        <div class="price"><span>Begin from</span>23.5k/month</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>">See Web Hosting</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-email.jpg', ['alt' => 'Business email']) ?>
                        <h3 class="small-title">Complete management</h3>
                        <h2 class="title">Business Email </h2>
                    </div>
                    <div class="body">
                        <p class="description">BKHOST is the first company who building business email, fully supporting the most complex requirements.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Suport 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Trusted Business Email Service</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Virus and Spam protection</p>
                        <div class="price"><span>Begin from</span>3.5 triệu/forever</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">See Business Email</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-vps.jpg', ['alt' => 'Cloud VPS']) ?>
                        <h3 class="small-title">Complete management</h3>
                        <h2 class="title">Cloud VPS SSD</h2>
                    </div>
                    <div class="body">
                        <p class="description"> Our Cloud VPS SSD system always delivers the absolute performance of your service.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Cloud SSD Technology</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Highly customizable</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Dedicated resources</p>
                        <div class="price"><span>Begin from</span>200k/month</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudVps']) ?>">See Cloud VPS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item">
                    <div class="header">
                        <?= $this->Html->image('frontend/service-icon-server.jpg', ['alt' => 'Rent Private Server']) ?>
                        <h3 class="small-title">Complete management</h3>
                        <h2 class="title">Rent Private Server</h2>
                    </div>
                    <div class="body">
                        <p class="description">Dedicated Server is a dedicated server for Server, you will own Server hardware and full administration.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Hardware Technology IBM, Dell, HP ...</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i>  Suport 24/7</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Customization in the upgrade</p>
                        <div class="price"><span>Begin from</span>2.45 triệu/month</div>
                    </div>
                    <div class="footer">
                        <a class="btn" href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'index']) ?>">See private server </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.home-services-->

<div class="container hidden-xs">
    <div class="home-slider">
        <!-- Unordered list representing the tabs -->
        <ul>
            <li><a href="#slide1"> BKHOST Human</a></li>
            <li><a href="#slide2">July Promotions</a></li>
            <li><a href="#slide3">Charity program</a></li>
            <li><a href="#slide4">BKHOST Commitment</a></li>
        </ul>

        <!-- Afterwards, include the div panels representing the panels of our slider -->
        <div id="slide1">
            <?= $this->Html->image('slider/slide1.jpg', ['alt' => ' BKHOST Human']) ?>
        </div>
        <div id="slide2">
            <?= $this->Html->image('slider/slide2.png', ['alt' => 'May Promotions']) ?>
        </div>
        <div id="slide3">
            <?= $this->Html->image('slider/slide3.jpg', ['alt' => '2016 charity program']) ?>
        </div>
        <div id="slide4">
            <?= $this->Html->image('slider/slide4.jpg', ['alt' => 'BKHOST Commitment']) ?>
        </div>
    </div><!--/.home-slider-->
</div>

<div class="certificate">
    <div class="container">
        <h3 class="block-title"><span>Certificate</span></h3>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="feedbacks">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="content">I was register and used hosting service of BKHOST, I see it very good. 
                                Fast and stable loading speed, support is also fast through the ticket no more than 15 minutes. 
                                 Thank you for your support, so I very much trust your service. Thank you!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Nguyễn Văn Thắng</h3>
                                    <em>PPO Company in Vietnam</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">View copyright information</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                        <div class="item">
                            <div class="content">I was used and transferred many hosting provider to choose BKHOST company,
							I found the service in this company runs very stable, especially customer service support very fast.
							This is the last address I will extend the service.Thank you!</div>
                            <div class="inf">
                                <div class="pull-left">
                                    <h3>Trần Nguyên Văn</h3>
                                    <em>Staff at Newton International School</em>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn">View copyright information</a>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div><!--/.feedbacks-->
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="cf mb30">
                    <div class="row">
                        <div class="col-md-6 col-xs-4"><span class="num">95%</span></div>
                        <div class="col-md-6 col-xs-8">
                            <h4>Satisfaction Support Service</h4>
                            <em>(July 2017)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="cf">
                    <div class="row">
                        <div class="col-md-6 col-xs-4"><span class="num">5000+</span></div>
                        <div class="col-md-6 col-xs-8">
                            <h4>Customer trust</h4>
                            <em>(Service prestige)</em>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->element('contact_highlight') ?>

<?php echo $this->Html->script('slider-tabs/jquery.sliderTabs.min.js', ['type' => 'text/javascript', 'block' => true]); ?>
<?php echo $this->Html->script('jquery.hoverIntent.js', ['type' => 'text/javascript', 'block' => true]); ?>