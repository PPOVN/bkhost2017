<!DOCTYPE html>
<html lang="vi">
<head>
    <?= $this->Html->charset() ?>
    <title><?= $title ?> - BKHOST.VN</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="<?=$meta_description?>" />
    <meta name="author" content="BKHOST.VN" />
    <meta name="generator" content="PPO.VN" />
    <meta name="robots" content="index, follow" /> 
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="geo.region" content="VN-HN" />
    <meta name="geo.position" content="20.97449;105.825924" />
    <meta name="ICBM" content="20.97449, 105.825924" />
    <link rel="icon" href="<?php echo SITE_URL ?>/img/frontend/logo-bkhost.jpg" sizes="32x32" />
    <link rel="icon" href="<?php echo SITE_URL ?>/img/frontend/logo-bkhost.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo SITE_URL ?>/img/frontend/logo-bkhost.jpg" /> <!--180x180 px-->
    <meta name="msapplication-TileImage" content="<?php echo SITE_URL ?>/img/frontend/logo-bkhost.jpg" /> <!--270x270 px-->
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="<?=$og_type?>" />
    <meta property="og:title" content="<?= $title ?> - BKHOST.VN" />
    <meta property="og:description" content="<?=$meta_description?>" />
    <meta property="og:url" content="<?=$og_url?>" />
    <meta property="og:site_name" content="BKHOST.VN" />
    <meta property="og:image" content="<?=$og_image?>" />
    <?php if($og_type == 'article'): ?>
    <meta property="article:publisher" content="https://www.facebook.com/bkhost.vn/" />
    <?php endif; ?>
    <meta property="fb:app_id" content="" />
    
    <link rel="canonical" href="<?=$canonical?>" />
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="publisher" href="https://plus.google.com/+NgôVănThắngIT"/>
    <link rel="alternate" href="https://bkhost.vn/" hreflang="vi-vn" />
    <link rel="alternate" href="<?php echo SITE_URL ?>/" hreflang="en-US" />
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('slider-tabs/jquery.sliderTabs.min.css') ?>
    <?= $this->Html->css('app.min.css') ?>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        var siteUrl = "<?php echo SITE_URL ?>";
        var is_mobile = false;
        var show_popup = false;
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63649460-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
    <noscript id="deferred-styles">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=vietnamese" rel="stylesheet" />
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('bootstrap-datetimepicker.min.css') ?>
        <?= $this->Html->css('fancybox/jquery.fancybox.min.css') ?>
        <?= $this->Html->css('owl.carousel.min.css') ?>
        <?= $this->Html->css('common.css') ?>
        <?= $this->fetch('css') ?>
    </noscript>
<!--    <div id="depreload">
        <div class="wrapper">
            <div class="circle">
                <canvas class="line" width="150px" height="150px"></canvas>
                <span class="logo"></span>
            </div>
        </div>
    </div>-->
    <div id="ajax_loading" style="display: none;z-index: 9999999" class="ajax-loading-block-window">
        <div class="loading-image"></div>
    </div>
    
    <div id="ppo-overlay" style="display: none"></div>

    <!--BEGIN: DESKTOP HEADER-->
    <div class="desktop-header">
        <div class="top-notify">
            <a href="<?php echo SITE_URL ?>/pages/khuyen-mai">WELCOME TO THE NEW RELEASE - PROMOTE PROMOTION</a>
        </div>
        <div class="top-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-2"></div>
                    <div class="col-lg-5 col-sm-5">
                        <em>Reputable Hosting Providers, operating from 2014. 24/7 Support</em>
                    </div>
                    <div class="col-lg-4 col-sm-5 t_right">
                        <span class="user-links">
                            <a href="http://manage.bkhost.vn/clientarea.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Customer login</a>
                            <a href="http://manage.bkhost.vn/register.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Registration</a>
                        </span>
                        <span class="lang-switcher">
                            <a href="https://bkhost.vn"><?= $this->Html->image('flags/vi.png', ['alt' => 'Tiếng Việt']) ?></a>
                            <a href="<?php echo SITE_URL; ?>"><?= $this->Html->image('flags/en.png', ['alt' => 'English']) ?></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="header_logo" itemtype="http://schema.org/Organization" itemscope="itemscope">
                            <a rel="home" title="SSD Hosting, Tên miền, Dedicated Server, Cloud VPS" href="<?php echo SITE_URL ?>" itemprop="url">
                                <?= $this->Html->image('frontend/logo-bkhost.jpg', ['alt' => 'BKHOST', 'itemprop' => 'logo']) ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <!--MAIN NAVIGATION-->
                        <nav class="main-nav navbar navbar-default">
                            <ul class="nav navbar-nav">
                                <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>" title="Tên miền">Domain <span class="caret"></span></a>
                                    <div class="sub-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?= $this->Html->image('menu/domain-bkhost.png', ['alt' => 'Khuyến mại']) ?>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="head head-domain-global">
                                                                <?= $this->Html->image('menu/domain-global.jpg', ['alt' => 'Tên miền']) ?>
                                                                Domain registration
                                                            </div>
                                                            <div class="body">Search and register domain name then you wil be receive your professional domain name, advance your online presence today.</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="head head-domain-vn">
                                                                <?= $this->Html->image('menu/domain-vn.png', ['alt' => 'Báo giá']) ?>
                                                                Domain Quotation
                                                            </div>
                                                            <div class="body">Domain Quotation of Viet Nam and the international</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>#pricing" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="links">
                                                        <p><strong>Useful services:</strong></p>
                                                        <ul>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'quyTrinhDangKyTenMien']) ?>">Domain name registration process</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'bieuMauHoSoDangKyTenMien']) ?>">Domain Registration Forms and Records</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>">SSL security</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">Business email</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="hosting"><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>" title="Hosting">Hosting <span class="caret"></span></a>
                                    <div class="sub-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?= $this->Html->image('menu/khuyem-mai-hosting.png', ['alt' => 'Khuyến mại']) ?>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="head head-hosting-personal">
                                                                <?= $this->Html->image('menu/hosting-personal.jpg', ['alt' => 'Hosting cá nhân']) ?>
                                                                Private hosting
                                                            </div>
                                                            <div class="body">Great Prices, set up web quickly and supported by our Support 24/7.</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'personal']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="head head-hosting-business">
                                                                <?= $this->Html->image('menu/hosting-business.jpg', ['alt' => 'Hosting doanh nghiệp']) ?>
                                                                Business Hosting
                                                            </div>
                                                            <div class="body">Your website will be hosted on professional hosting plus many optimization features.</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'business']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="head head-hosting-wordpress">
                                                                <?= $this->Html->image('menu/hosting-wordpress.jpg', ['alt' => 'Hosting WordPress']) ?>
                                                                Hosting WordPress
                                                            </div>
                                                            <div class="body">Hosting optimized for WordPress such as blogs, ecommerce, company websites and more.</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'wordpress']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="links">
                                                        <p><strong>Useful services:</strong></p>
                                                        <ul>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'backup']) ?>">7 day backups are useful</a></li>
                                                            <li><a href="http://web5s.com">Professional website design</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>">SSL security</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">Business email</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="email"><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" title="Email">Email <span class="caret"></span></a>
                                    <div class="sub-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?= $this->Html->image('menu/email-bkhost.png', ['alt' => 'Khuyến mại']) ?>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="head head-email">
                                                                <?= $this->Html->image('menu/email.jpg', ['alt' => 'Email doanh nghiệp']) ?>
                                                                Business email - Google Apps
                                                            </div>
                                                            <div class="body">- Raise the brand of the business (For example: tennhanvien@tendoanhnghiep.com). 
                                                                - Full control over employee email.</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="head head-server">
                                                                <?= $this->Html->image('menu/server.jpg', ['alt' => 'Email doanh nghiệp']) ?>
                                                                Business email - Rent by month
                                                            </div>
                                                            <div class="body">- Appropriate investment costs - Convenient in the process of upgrading the number of emails as desired. - Flexibility in use</div>
                                                            <div class="footer">
                                                                <a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'rent']) ?>" class="btn btn-warning">Find out more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="links">
                                                        <p><strong>Useful services:</strong></p>
                                                        <ul>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>">Domain registration</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>">Registration Hosting </a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'backup']) ?>">Email Backup Service</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>">SSL security service</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cloud-vps"><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'index']) ?>" title="Cloud & Server">Cloud & Server <span class="caret"></span></a>
                                    <div class="sub-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?= $this->Html->image('menu/khuyem-mai-cloudvps.png', ['alt' => 'Khuyến mại']) ?>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="head head-cloud-vps">
                                                                <?= $this->Html->image('menu/cloud-vps.jpg', ['alt' => 'Cloud VPS']) ?>
                                                                Cloud VPS
                                                            </div>
                                                            <div class="body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Cloud SSD VPS</strong></p>
                                                                        <p>The Cloud VPS SSD of our system always brings the absolute effect</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudVps']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Our Cloud VPS</strong></p>
                                                                        <p>Cloud technology at BKHOST will bring the best service to you</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudBkhost']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="head head-server">
                                                                <?= $this->Html->image('menu/server.jpg', ['alt' => 'Máy chủ']) ?>
                                                                Rent Physical server - Rent Space for server
                                                            </div>
                                                            <div class="body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Hiring dedicated server</strong></p>
                                                                        <p>The Hoster at BKHOST always provide maximum performance and excellent.</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'dedicateServer']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Rent Space for server</strong></p>
                                                                        <p>The data center international standard Tier 3,electrical system,temperature, security standards.</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'colo']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="links">
                                                        <p><strong>Useful services:</strong></p>
                                                        <ul>
                                                            <li><a href="#">Upgrade server</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'backupVps']) ?>">Backup your server</a></li>
                                                            <li><a href="#">Disaster recovery</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'serverAdministration']) ?>">Server Management Service</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="software"><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>" title="Phần mềm">Software<span class="caret"></span></a>
                                    <div class="sub-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?= $this->Html->image('menu/phanmem-bkhost.png', ['alt' => 'Khuyến mại']) ?>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="head head-cloud-vps">
                                                                <?= $this->Html->image('menu/cloud-vps.jpg', ['alt' => 'Cloud VPS']) ?>
                                                                Web security
                                                            </div>
                                                            <div class="body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p><strong>SSL Certificateur </strong></p>
                                                                        <p>Secure your website and client transaction</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p><strong>What is SLL?</strong></p>
                                                                        <p>The reasons you should protect your website in the best way here</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'viSaoCanBaoVeWebsite']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="head head-server">
                                                                <?= $this->Html->image('menu/server.jpg', ['alt' => 'Máy chủ']) ?>
                                                                Server software
                                                            </div>
                                                            <div class="body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Server for website</strong></p>
                                                                        <p>Providing software such as: Cpanel, Parallels Plesk, DirectAdmin</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p><strong>Security Web Server</strong></p>
                                                                        <p>Provide applications for security services such as: CloudLinux OS, LiteSpeed.</p>
                                                                        <div class="footer">
                                                                            <a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>" class="btn btn-warning">Find out more</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="links">
                                                        <p><strong>Useful services:</strong></p>
                                                        <ul>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>">Domain registration</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>">Hosting Registration</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudVps']) ?>">Register VPS</a></li>
                                                            <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">Registration business email</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="http://web5s.com" title="Thiết kế web">Website design</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END: DESKTOP HEADER-->
    
    <!--MOBILE HEADER-->
    <div id="st-container" class="st-container">
        <div class="mobile-header clearfix mobile-unclicked" style="transform: translate(0px, 0px);">
            <div id="st-trigger-effects">
                <button data-effect="st-effect-4" class="left-menu">
                    <div class="menu-icon">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="title">
                <a rel="home" title="SSD Hosting, Tên miền, Dedicated Server, Cloud VPS" href="<?php echo SITE_URL ?>">
                    <?= $this->Html->image('frontend/logo-bkhost.jpg', ['alt' => 'BKHOST', 'itemprop' => 'logo']) ?>
                </a>
            </div>
            <div id="st-trigger-effects">
                <div data-effect="st-effect-5" class="right-menu">
                    <a href="http://manage.bkhost.vn/clientarea.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Khách hàng</a>
                </div>
            </div>
        </div>
        
        <nav id="menu-4" class="st-menu st-effect-4">
            <form method="get" action="/search/" id="search_mini_form">
                <div class="form-search">
                    <div class="searchcontainer"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="text" maxlength="128" class="input-text" value="" name="s" id="search" />
                    </div>
                </div>
            </form>

            <ul class="nav">
                <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>" title="Tên miền">Tên miền</a> <span class="caret"></span>
                    <ul class="sub-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>#pricing" title="Báo giá Tên miền">Báo giá Tên miền</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'quyTrinhDangKyTenMien']) ?>">Quy trình đăng ký tên miền</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'bieuMauHoSoDangKyTenMien']) ?>">Biểu mẫu và hồ sơ đăng ký tên miền</a></li>
                    </ul>
                </li>
                <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>" title="Hosting">Hosting</a> <span class="caret"></span>
                    <ul class="sub-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'personal']) ?>" title="Hosting cá nhân">Hosting cá nhân</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'business']) ?>" title="Hosting doanh nghiệp">Hosting doanh nghiệp</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'wordpress']) ?>" title="Hosting WordPress">Hosting WordPress</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'backup']) ?>">7 ngày sao lưu hữu ích</a></li>
                    </ul>
                </li>
                <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" title="Email">Email doanh nghiệp</a> <span class="caret"></span>
                    <ul class="sub-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>" title="Email Vĩnh viễn">Email Vĩnh viễn</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'rent']) ?>" title="Email Thuê theo tháng">Email Thuê theo tháng</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'backup']) ?>" title="Dịch vụ Backup Email">Dịch vụ Backup Email</a></li>
                    </ul>
                </li>
                <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'index']) ?>" title="Cloud & Server">Cloud & Server</a> <span class="caret"></span>
                    <ul class="sub-menu">
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudVps']) ?>">Cloud VPS</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'cloudBkhost']) ?>">Cloud BKHOST</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'dedicateServer']) ?>">Thuê máy chủ riêng</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'colo']) ?>">Thuê chỗ đặt Server</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'backupVps']) ?>">Dịch vụ Sao lưu máy chủ</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'serverAdministration']) ?>">Dịch vụ quản trị máy chủ</a></li>
                    </ul>
                </li>
                <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>" title="Phần mềm">Phần mềm</a> <span class="caret"></span>
                    <ul>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'ssl']) ?>" title="Chứng chỉ Bảo mật SSL">Chứng chỉ Bảo mật SSL</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'viSaoCanBaoVeWebsite']) ?>" title="Bảo mật SSL là gì?">Bảo mật SSL là gì?</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>" title="Cloud Linux">Cloud Linux</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab2" title="Cpanel">Cpanel</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab3" title="DirectAdmin">DirectAdmin</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab4" title="Litespeed">Litespeed</a></li>
                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>#tab5" title="Paralleels Plesk">Paralleels Plesk</a></li>
                    </ul>
                </li>
                <li><a href="http://web5s.com" title="Thiết kế web">Thiết kế web</a></li>
            </ul>
        </nav>
    </div>
    <!--/MOBILE HEADER-->

    <!--BEGIN: FLASH MESSAGE-->
    <div id="nNote" class="container"><?= $this->Flash->render() ?></div>
    <!--END: FLASH MESSAGE-->

    <!--BEGIN: MAIN CONTENT-->
    <div class="main-content">
        <?= $this->fetch('content') ?>
        
        <div class="container">
            <div class="partners">
                <h3 class="block-title"><span>PARTNER</span></h3>
                <div class="owl-carousel">
                    <a href="http://ppo.vn" title="PPO Việt Nam" target="_blank"><?= $this->Html->image('partners/logo-ppo.png', ['alt' => 'PPO Việt Nam']) ?></a>
                    <a href="#" title="Thủ Đô JSC"><?= $this->Html->image('partners/logothudojsc.png', ['alt' => 'Thủ Đô JSC']) ?></a>
                    <a href="#" title="CMC"><?= $this->Html->image('partners/cmc.png', ['alt' => 'CMC']) ?></a>
                    <a href="#" title="FPT"><?= $this->Html->image('partners/fpt.png', ['alt' => 'FPT']) ?></a>
                    <a href="#" title="VDC"><?= $this->Html->image('partners/vdc.png', ['alt' => 'VDC']) ?></a>
                    <a href="#" title="Viettel"><?= $this->Html->image('partners/viettel.png', ['alt' => 'Viettel']) ?></a>
                    <a href="#" title="VNN@"><?= $this->Html->image('partners/vnn.png', ['alt' => 'VNN@']) ?></a>
                    <a href="#" title="DirectAdmin"><?= $this->Html->image('partners/DirectAdmin-Logo.png', ['alt' => 'DirectAdmin']) ?></a>
                    <a href="#" title="Cpanel"><?= $this->Html->image('partners/cpanel2.png', ['alt' => 'Cpanel']) ?></a>
                    <a href="#" title="HP"><?= $this->Html->image('partners/HP.png', ['alt' => 'HP']) ?></a>
                    <a href="#" title="IBM"><?= $this->Html->image('partners/IBM.png', ['alt' => 'IBM']) ?></a>
                    <a href="#" title="Dell"><?= $this->Html->image('partners/dell.png', ['alt' => 'Dell']) ?></a>
                </div>
            </div>
        </div>
    </div>
    <!--END: MAIN CONTENT-->

    <!--BEGIN: FOOTER-->
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-left">
                    <div class="widget">
                        <h3 class="widget-title">Contact us</h3>
                        <div class="widget-content">
                            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 
                                Room 815, Dai Kim Building, Vu Tong Phan, Hanoi</p>
                            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                                <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                            <p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 
                                <a href="tel:0466591442">(024) 6259 1442</a></p>
                            <p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 
                                <a href="tel:0981131161">0984.131.161</a></p>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">Community Connection</h3>
                        <div class="widget-content">
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/bkhost.vn/"><?= $this->Html->image('frontend/icon-fb.png', ['alt' => 'Facebook']) ?></a></li>
                                <li><a href="https://plus.google.com/u/1/"><?= $this->Html->image('frontend/icon-gplus.png', ['alt' => 'Google Plus']) ?></a></li>
                                <li><a href="#"><?= $this->Html->image('frontend/icon-linkedin.png', ['alt' => 'Linked In']) ?></a></li>
                                <li><a href="#"><?= $this->Html->image('frontend/icon-yt.png', ['alt' => 'Youtube']) ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="widget">
                                <h3 class="widget-title">About BKHOST</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">About BKHOST</a></li>
                                        <li><a href="#">Why choose BKHOST</a></li>
                                        <li><a href="#">Investor relations</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h3 class="widget-title">Product</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Domain', 'action' => 'index']) ?>">Domain</a></li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Hosting', 'action' => 'index']) ?>">Shared Hosting</a></li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Email', 'action' => 'index']) ?>">Business email</a></li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Server', 'action' => 'index']) ?>">Cloud & Server</a></li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Software', 'action' => 'index']) ?>">License software</a></li>
                                        <li><a href="http://web5s.com">Website design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h3 class="widget-title">Scale management</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Server migration service</a></li>
                                        <li><a href="#">Professional web design</a></li>
                                        <li><a href="#">BKHOST Network Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h3 class="widget-title">BKHOST Partner</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Agents & Agents overview</a></li>
                                        <li><a href="#">List of customers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <div class="col-sm-9">
                        <h3>VIETNAM NETWORK SOLUTIONS JOINT STOCK COMPANY</h3>
                        <p>Address: Room 815, Dai Kim Building, Vu Tong Phan, Hanoi</p>
                        <p>Tax code: 0106810847</p>
                        <p>Manager: Trịnh Duy Thanh</p>
                        <p>Hotline: (024) 6259 1442 - 0984 131 161</p>
                        <p>Email: <a href="mailto:info@bkhost.vn">info@bkhost.vn</a></p>
                        <p>Website: <a href="<?php echo SITE_URL; ?>">bkhost.vn</a> - 
                            <a href="http://thuevps.com.vn">thuevps.com.vn</a> - 
                            <a href="http://thuemaychuao.vn">thuemaychuao.vn</a></p>
                    </div>
                    <div class="col-sm-3">
                        <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=22605" target="_blank">
                            <?= $this->Html->image('frontend/dathongbao.png', ['alt' => 'Đã đăng ký bộ công thương']) ?>
                        </a>
                    </div>
                </div>
                <div class="notes">
                    Acceptable use policy - 
                    <a href="#">Terms of service</a> | 
                    <a href="#">Privacy Policy</a> | 
                    <a href="#">Terms of Affiliate Service</a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <span>Copyright © BKHOST Corporation. All Rights Reserved</span>
            </div>
        </div>
    </div>
    <!--END: FOOTER-->

    <div id="sticky-right">
        <ul class="menu">
            <li class="transparent">
                <a class="scrollTo"><i class="fa fa-arrow-circle-up"></i></a>
                <span class="tooltip">Top</span>
            </li>
            <li>
                <a class="openPhonePopup"><i class="fa fa-phone"></i></a>
                <span class="tooltip">Telephone</span>
            </li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Contact', 'action' => 'index']) ?>" target="_blank"><i class="fa fa-envelope"></i></a>
                <span class="tooltip">Contact</span>
            </li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'support']) ?>" target="_blank"><i class="fa fa-question"></i></a>
                <span class="tooltip">24/7 support</span>
            </li>
            <li>
                <a href="<?= $this->Url->build(['controller' => 'Payment', 'action' => 'index']) ?>" target="_blank"><i class="fa fa-dollar"></i></a>
                <span class="tooltip">Payments</span>
            </li>
        </ul>
        <div class="phonePopup">
            <div class="back"></div>
            <div class="front">
                <div class="content">
                    <h3>Customer care center</h3>
                    <div class="group kinh-doanh">
                        <div class="phone-row">
                            <div class="left">
                                <?= $this->Html->image('frontend/kinhdoanh.png', ['alt' => 'Kinh doanh']) ?>
                                <h4>Business</h4>
                            </div>
                            <div class="right">
                                <!--<h5>Hành chính</h5>-->
                                <!--<h4>Kinh doanh</h4>-->
                                <p>Home Phone: <span class="blue">024.6659.1442</span></p>
                                <p>Mobile: <span class="blue">0984.131.161</span></p>
                                <p>Mobile: <span class="blue">0163.272.0340</span></p>
                                <p>Mobile: <span class="blue">0169.453.4868</span></p>
								<p>Mobile: <span class="blue">0936.221.432</span></p>							
                            </div>
                        </div>
                        <div class="feature-row">
                            <ul class="features">
                                <li>Consulting Services</li>
                                <li>Support for service registration</li>
                                <li>Renewal of service</li>
                                <li>Payment confirmation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="group kinh-doanh">
                        <div class="phone-row">
                            <div class="left">
                                <?= $this->Html->image('frontend/kythuat.png', ['alt' => 'Kỹ thuật']) ?>
                                <!--<h4>Kỹ thuật</h4>-->
                            </div>
                            <div class="right">
                                <!--<h5>Hành chính</h5>-->
                                <h4>Technical</h4>
                                <p>Home Phone: <span class="blue">024.6659.1442</span></p>
                                <p>Mobile: <span class="blue">0169.453.4868</span></p>
								<p>Mobile: <span class="blue">0968.107.424</span></p>
                            </div>
                        </div>
                        <div class="feature-row">
                            <ul class="features">
                                <li>Manual instruction</li>
                                <li>Check the system</li>
                                <li>Technical advice</li>
                                <li>Error message</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <i class="i fa fa-times close"></i>
            </div>
        </div>
    </div>
    
    <!--POPUP-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">THÔNG BÁO NGHỈ LỄ TẾT DƯƠNG LỊCH 2018</h4>
                </div>
                <div class="modal-body t_center">
                    <?= $this->Html->image('frontend/thong-bao-nghi-le.png', ['alt' => 'Thông báo nghỉ lễ']) ?>
                </div>
                <div class="modal-footer hide hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Reference Scripts -->
    <?php echo $this->Html->script(['jquery.js', 'moment.min.js', 'jquery-ui.min.js'], ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script(['bootstrap.min.js', 'bootstrap-datetimepicker.min.js'], ['type' => 'text/javascript']); ?>
    <?php // echo $this->Html->script('jquery.DEPreLoad.js', ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script('fancybox/jquery.fancybox.min.js', ['type' => 'text/javascript']); ?>
    <?php // echo $this->Html->script('jquery-scrolltofixed-min.js', ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script('jquery.elevateZoom-3.0.8.min.js', ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script('owl.carousel.min.js', ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script('hammer.min.js', ['type' => 'text/javascript']); ?>
    <?php echo $this->Html->script('jquery.countdown.min.js?ver=2.2.0', ['type' => 'text/javascript']); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.6.1/lodash.min.js"></script>
    <?= $this->fetch('script') ?>
    <?php echo $this->Html->script('app.min.js', ['type' => 'text/javascript']); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--Start Load stylesheets-->
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf){ raf(function() { window.setTimeout(loadDeferredStyles, 0); });}
      else{ window.addEventListener('load', loadDeferredStyles);}
    </script>
    <!--End Load stylesheets-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5812bd87e808d60cd073adcc/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 879117416;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/879117416/?guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>