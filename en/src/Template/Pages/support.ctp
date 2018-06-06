<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/support.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/call-support.png', ['alt' => 'Support']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>BKHOST support 24/7</h1>
                        <h3>Always with you, anytime, anywhere</h3>
                        <p>We look forward to meeting your expectations in the services we provide that are quick and effective support for your request.
							We want to do the 24/7 support for you to solve problem as soon as possible.  
							We will be there to support you 24 hours a day, 7 days in a week, 365 days a year.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-call.png', ['alt' => 'Call']) ?></div>
                        <div class="pull-right mt15"><a href="tel:0462591442">04 6259 1442</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-ticket.png', ['alt' => 'Ticket']) ?></div>
                        <div class="pull-right mt15"><a href="https://manage.bkhost.vn/submitticket.php">Gửi Ticket</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-chat.png', ['alt' => 'Live Chat']) ?></div>
                        <div class="pull-right mt15"><a href="https://tawk.to/chat/5812bd87e808d60cd073adcc/default/?$_tawk_popout=true&$_tawk_sk=59719fa77b37fecfcfc4e54d&$_tawk_tk=7c4ef1ea266df1580d434dd000b0d89e&v=561">Live Chat</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="item-wrap">
                    <div class="item">
                        <div class="pull-left"><?= $this->Html->image('frontend/icon-remote.png', ['alt' => 'Remote']) ?></div>
                        <div class="pull-right mt15"><a href="#">Remote support</a></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="support-tabs">
    <div class="container">
        <div id="support_tabs">
            <ul>
                <li><a href="#tab1" title="Overview support">Overview support</a></li>
                <li><a href="#tab2" title="Commitment">Commitment</a></li>
                <li><a href="#tab3" title="Support have insurrance">Support have insurrance</a></li>
                <li><a href="#tab4" title="Support with the best capacity">Support with the best capacity</a></li>
            </ul>
            <div id="tab1">
                <h3 class="block-title block-title1"><span> Support centre provide to you </span></h3>
                <div class="row support-provide mb30">
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-clock-checked.png', ['alt' => 'Clock']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>peace of mind</span></h3>
                                <p>Guaranteed the operating time is 99,9%, with the professional SuperSupport </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-earth-checked.png', ['alt' => 'Earth']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>convinient</span></h3>
                                <p> Transfer service to BKHOST? We know it's hard for you to decide this problem, But we commit support you 100% to do best this transfer!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-money-checked.png', ['alt' => 'Money']) ?></div>
                            <div class="col-xs-9">
                                <h3>Siêu <span>Cost savings</span></h3>
                                <p>You have special price for our service but also You still enjoy many good support features.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-identity-checked.png', ['alt' => 'Control']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>Control</span></h3>
                                <p>You absolutely control your data, we don't access to data so you completely confident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-liked-checked.png', ['alt' => 'Liked']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super<span>satisfied</span></h3>
                                <p>Based on many feedbacks from our customers, we are sure that you will be satisfied with our services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-locked-checked.png', ['alt' => 'Bảo vệ']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>safe</span></h3>
                                <p>Take a break and relax knowing that all of your transaction services are encrypted securely, along with enhanced security features.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-hop-tac-checked.png', ['alt' => 'Hợp tác']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>dedication</span></h3>
                                <p>With our dedicated staff, we will always try our best to help you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-xs-3"><?= $this->Html->image('support/icon-server-checked.png', ['alt' => 'Server']) ?></div>
                            <div class="col-xs-9">
                                <h3>Super <span>Powerful server</span></h3>
                                <p>All of our systems are 100% investment with the latest technology that provide excellent performance and reliability for your services..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row support-sponsor mb50">
                    <h3 class="block-title block-title2"><span>Support</span></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <?= $this->Html->image('frontend/icon-support.png', ['alt' => 'Support']) ?>
                                    </div>
                                    <div class="col-xs-9">
                                        <h3>Many platforms support</h3>
                                        <p>We understand that different clients have different ways of contacting support tools. Therefore, we provide 4 forms of support:</p>
                                        <p>
                                            <a class="support-method" href="https://tawk.to/chat/5812bd87e808d60cd073adcc/default/?$_tawk_popout=true&$_tawk_sk=59719fa77b37fecfcfc4e54d&$_tawk_tk=7c4ef1ea266df1580d434dd000b0d89e&v=561" title="Chat with us">
                                                <?= $this->Html->image('frontend/icon-chat2.png', ['alt' => 'Chat']) ?>
                                            </a>
                                            <a class="support-method" href="#" title="(024) 6259 1442">
                                                <?= $this->Html->image('frontend/icon-call2.png', ['alt' => 'Call']) ?>
                                            </a>
                                            <a class="support-method" href="https://manage.bkhost.vn/submitticket.php" title="Send Ticket to us">
                                                <?= $this->Html->image('frontend/icon-mail.png', ['alt' => 'Email']) ?>
                                            </a>
                                            <a class="support-method" href="#" title="">
                                                <?= $this->Html->image('frontend/icon-pc.png', ['alt' => 'PC']) ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <?= $this->Html->image('frontend/icon-time.png', ['alt' => 'Time']) ?>
                                    </div>
                                    <div class="col-xs-9">
                                        <h3>Fast support 24/7/365</h3>
                                        <p>We understand that the problem can happen at any time of the day and can seriously affect your website. BKHOST support is accessible 24/7.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row support-speed">
                    <h3 class="block-title block-title2"><span>Speed</span></h3>
                    <div class="row">
                        <div class="col-sm-6 mb30">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <?= $this->Html->image('frontend/icon-security2.png', ['alt' => 'Security']) ?>
                                    </div>
                                    <div class="col-xs-9">
                                        <h3>Secure your data</h3>
                                        <p>BKHOST develops technology that alerts you if an attacker modifies your site without your knowledge.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <?= $this->Html->image('frontend/icon-malware.png', ['alt' => 'Malware']) ?>
                                    </div>
                                    <div class="col-xs-9">
                                        <h3>Anti-malware management system</h3>
                                        <p>Our anti-malware system always protect your service is the safest.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" style="display: none">
                <h3 class="block-title block-title3"><span>Supporting words</span></h3>
                <div class="row">
                    <div class="col-sm-9">
                        <p>BKHOST we are one of the company that provide personal services, big and small businesses,
                             We always take quality and prestige in customer care as the development orientation of the business,
							 so we believe our skilled and dedicated team will serve you well.
							 And when you use our service, it's time for us to start our promise</p>
                    </div>
                    <div class="col-sm-3">
                        <?= $this->Html->image('frontend/promise.jpg', ['alt' => 'Rescue words']) ?>
                    </div>
                </div>
                <div class="support-procedure">
                    <div class="row">
                        <div class="col-md-6 hidden-sm hidden-xs"><?= $this->Html->image('frontend/xu-ly.jpg', ['alt' => 'Quy trình xử lý']) ?></div>
                        <div class="col-md-6 col-sm-12">
                            <div class="right">
                                <h2>PROCESSING</h2>
                                <h3>Our registration support process</h3>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Guide you in purchasing services process</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Gives you all the information you need to make a purchase</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Employees introduce the best solution for your service</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>No strong advertising or false information</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Manual used by BKHOST staff</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Price transparency for all products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-setup">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="left">
                                <h2>SET UP PROCESS</h2>
                                <h3>We support installation in the process of using your service</h3>
                                <p><i class="fa fa-check" aria-hidden="true"></i> The installation time is low</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Provide full information during the installation process for your service</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Update server status during installation</p>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </div>
                <div class="support-procedure">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs"><?= $this->Html->image('frontend/take care of-02.png', ['alt' => 'OUR ACTIVITY']) ?></div>
                        <div class="col-sm-7">
                            <div class="right">
                                <h2>OUR ACTIVITY</h2>
                                <h3>How we support the service in a day</h3>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Take proactive approach to solving your service issues</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>  24/7 support</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Support by multiple platforms</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i> Support efforts always have good policy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" style="display: none">
                <div class="support-insurance-service">
                    <h3 class="block-title block-title4"><span>Service insurance</span></h3>
                    <p>At BKHOST, we offer a lot of supportive methods</p>
                    <p><strong>If you encounter problems with hosting your website, do not worry because we will work hard to support you.</strong></p>
                    <p>All Hosting services at BKHOST are covered by 3 types of protection; Hosting, application and malware support.</p>
                </div>
                <div class="support-hosting">
                    <h3 class="block-title block-title5"><span>Hosting support</span></h3>
                    <p class="t_center mb30"><strong>All matters related to us</strong></p>
                    <div class="row">
                        <div class="col-sm-4 t_right">
                            <p><strong>Core infrastructure</strong></p>
                            <p>Ability to manage servers and applications, Web services more efficiently.</p>
                            <p>The ability to deploy / configure faster for services and Web applications on farm servers.</p>
                            <p>A customizable Web platform, streamlined and more efficient.</p>
                            <p>Greater performance and scalability for Web applications and services.</p>
                            <p class="mb30">Ability to control and observe how and when applications and services use critical operating system resources..</p>
                            <p><strong>Broad support of operating systems</strong></p>
                            <p>Extensive support for parallel operation of multiple types of operating systems, including 32-bit systems and 64-bit
                                on various server platforms, such as Windows, Linux, and other platforms.</p>
                        </div>
                        <div class="col-sm-4"><?= $this->Html->image('frontend/hosting-bkhost.jpg', ['alt' => 'Hosting support']) ?></div>
                        <div class="col-sm-4 t_left">
                            <p><strong>Backup server replacement</strong></p>
                            <p class="mb30">Our BKHOST has multiple standby servers replaced at any time when the service is interrupted. 
                                Disaster recovery is therefore an important component of business continuity</p>
                            <p><strong>BKHOST System Technology</strong></p>
                            <p>Bkhost Vietnam is the company that invested in the server system standardized Storage area network-SAN technology. 
                                Bring true quality products to Vietnamese customers. Ensures the perfection of system speed and stability.
						        Maximize system performance and user experience. The system speed is superior to that of conventional systems and the stability is better.</p>
                        </div>
                    </div>
                </div>
                <div class="support-hosting2">
                    <h3 class="block-title block-title5"><span> Hosting support</span></h3>
                    <p class="mb30 pdl15 pdr15">Hosting Platform at BKHOST, We are confident to meet all the strict requirements from you.
					Since our initial, we have served thousands of customers across the country 
                        And foreign individuals, business guests and we have consistently received the praise. 
						For example: Fast response service, very satisfied customer support and affordable service.</p>
                    <p><strong>The list of apps we meet:</strong> 
                    <?= $this->Html->image('frontend/wordpress-bkhost.jpg', ['alt' => 'WordPress']) ?> 
                    <?= $this->Html->image('frontend/magento-bkhost.jpg', ['alt' => 'Magento']) ?> 
                    <?= $this->Html->image('frontend/drupal-bkhost.jpg', ['alt' => 'Drupal']) ?> 
                    <?= $this->Html->image('frontend/joomla-bkhost.jpg', ['alt' => 'Joomla']) ?></p>
                </div>
                <div class="support-anti-malware">
                    <h3 class="block-title block-title6"><span>Anti-malware support software</span></h3>
                    <div class="row">
                        <div class="col-sm-5">
                            <?= $this->Html->image('frontend/anti-malware.png', ['alt' => 'Anti-Malware']) ?>
                        </div>
                        <div class="col-sm-7">
                            <p class="mt30 mb30"> The websites face the risk of being infected with malware. 
							BKHOST will help investigate a malware attack at its best and try your best to give you the source of the infection.</p>
                            <p><strong>We are absolutely free of charge when the service you have trouble needs support or restoration of your data when you ask us.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab4" style="display: none">
                <h3 class="block-title block-title7"><span>BKHOST supports the best capacity</span></h3>
                <div class="row">
                    <div class="col-sm-4">
                        <?= $this->Html->image('frontend/ho-tro-khach-hang.jpg', ['alt' => 'Support customer']) ?>
                    </div>
                    <div class="col-sm-8">
                        <p class="mb30">We BKHOST 24/7. Please select our support service as the first choice criteria for your service.
							We thank you for trusting us, And we are proud of providing the professional service and support you.</p>
                        <p class="mb30">Our best efforts support includes troubleshooting and resolution to issues for the service. 
							The support includes the problems that you encountered while using the service, with our commitment under 1 hour - 
                            Make sure your service will be fully processed * .</p>
                        <p>*BKHOST will spend up to an hour to assist in troubleshooting and solving issues related services
                            of you, trong nỗ lực hết sức mình.</p>
                    </div>
                </div>
                <div class="support-difficult">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left">
                                <h3>Tell us your difficulties!</h3>
                                <p class="mb30">Please tell us your difficulties in using the service through the following tools: Ticket, Email, Phone, Live Chat. 
                                    Let us know as soon as possible and from there we will work with you to resolve the difficult issues. 
                                    If those difficulties are out of our range, give us a reasonable amount of time,
										Let us do our best to solve those problems for you.</p>
                                <p>
                                    <a class="support-method" href="#" title="Chat with us">
                                        <?= $this->Html->image('frontend/icon-chat2.png', ['alt' => 'Chat']) ?>
                                    </a>
                                    <a class="support-method" href="#" title="Call to us">
                                        <?= $this->Html->image('frontend/icon-call2.png', ['alt' => 'Call']) ?>
                                    </a>
                                    <a class="support-method" href="#" title="Send email to us">
                                        <?= $this->Html->image('frontend/icon-mail.png', ['alt' => 'Email']) ?>
                                    </a>
                                    <a class="support-method" href="#" title="">
                                        <?= $this->Html->image('frontend/icon-pc.png', ['alt' => 'PC']) ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 hidden-sm hidden-xs">
                            <?= $this->Html->image('frontend/Difficults of you.jpg', ['alt' => 'Difficult']) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <?= $this->Html->image('frontend/icon-speed-02.png', ['alt' => 'Speed']) ?>
                    </div>
                    <div class="col-sm-8">
                        <h3 style="color: #bf1718" class="mb30">Support services include</h3>
                        <p>BKHOST support includes consultants, application support, site restoration, web data transfer, 
                            Install server operating system, service professional or any other basic system administrator.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.support-tabs-->

<?= $this->element('other_services2') ?>