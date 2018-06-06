<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Pages/server_administration.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/server-admin.png', ['alt' => 'Quản trị máy chủ']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1 style="text-transform:none">Server Management Service</h1>
                        <h3>Highly skilled technical team at BKHOST</h3>
                        <p>With a team of highly skilled technicians at BKHOST will assist you in server operation. 
						This is always handy when you do not have to hire a person with hight costs and unintended expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="hosting-columns email-pkgs">
    <div class="container">
        <div class="hosting-column hosting-column-4 hosting-column-highlight email-column-highlight">
            <div class="column-header">
                <span>Rent a month</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">rent a month convenient time. <br/>But the cost is consistent</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.100K</span>/Month</div>
                <a href="#" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4">
            <div class="column-header">
                <span>Rent three months</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">rent three months of initiative for the plan. <br/>Cost is moderate</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>1.000K</span>/Month</div>
                <a href="#" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4">
            <div class="column-header">
                <span>Rent six months</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">rent six months longger plan.<br/>Lower cost</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>900K</span>/Month</div>
                <a href="#" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="hosting-column hosting-column-4 last">
            <div class="column-header">
                <span>Rent twelve months</span>
            </div>
            <div class="column-body">
                <p class="t_center pdb30">rent twelve months always avtive work.<br/>The lowest cost</p>
            </div>
            <div class="column-footer">
                <div class="price"><span>800K</span>/Month</div>
                <a href="#" class="btn btn-warning">Registration</a>
            </div>
        </div><!--/.hosting-column-->
        <div class="clearfix"></div>
    </div>
</div><!--/.hosting-columns-->

<div class="server-admin-info pdb30">
    <div class="container">
        <h3 class="block-title"><span>Information Server administrative</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Content of the routine work</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><span>Support to detect errors web server, database, email server installed by BKHOST</span></li>
                                <li><span>Updated software patches and patches installed by BKHOST and - Operating system (if available and compatible).</span></li>
                                <li><span>Support for application level security settings: set up antivirus, firewall software under operating system.</span></li>
                                <li><span>Restart apache, mysql, email server via ssh and control panel.</span></li>
                                <li><span>The instructions to configure the backup based on the available support tools of the control panel hosting backup on the local HDD when the client requests.</span></li>
                                <li><span>Guide to restore data from data backup (if any) to restore the operation of the website.</span></li>
                                <li><span>Guide to restore the operation of the website in case: server overload, hardware failure, service crashes, system failure.</span></li>
                                <li><span>Do not correct the bug if the user caused the error, this case BKHOST support only guide search error.</span></li>
                                <li><span>Does not support custom install client software and source code deployed by client side</span></li>
                                <li><strong>Customer support in administering Hosting control panel:</strong><br>
                                    <span>- Create a template</span><br/>
                                    <span>- Create / Delete Host</span><br/>
                                    <span>- Configure DNS</span><br/>
                                    <span>- Park domain</span><br/>
                                    <span><em>(BKHOST only performs a management demo for 1 hosting, then instructs the customer to do it for other hosting)</em></span>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Content of high-level jobs</th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><span>Supports to restore data from backups (if any) to restore the operation of the website.</span></li>
                                <li><span>Support to restore the operation of the web server in the event of: server overload, hardware failure, service crashes, system failure.</span></li>
                                <li><span>Installation instructions for other software and services according to customer requirements. - Only install software that is fully supported, licensed, and compatible with the server operating system.</span></li>
                                <li><span>Optimized configuration of Web server, database server, OS to minimize server resource consumption</span></li>
                                <li><span>Customer support against small and medium botnets: Install a firewall on the server, block the connection to the attack (Note: if the botnet is large, the server can still be affected)</span></li>
                                <li><span>Advise on the security level of the source code the client is using.</span></li>
                                <li><span>Ensure the compatibility of the application configuration between the old server and the new server (if customers transfer services from other places).</span></li>
                                <li><span>Supports checking for errors at the application level during use.</span></li>
                                <li><span>Consulting clients to apply the best solutions with the services they are using.</span></li>
                                <li><span>Do not fix errors if the user caused the error, in this case BKHOST only support guide search.</span></li>
                                <li><span>Does not support custom install client software and source code deployed by client side.</span></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><!--/.server-admin-info-->

<div class="lp-row-gray">
    <div class="container">
        <p><strong style="color:#bf1718">Collaboration with customers:</strong></p>
        <p>- BKHOST will be responsible for informing customers about their installed applications if any<br/>
            - Customer interferes and installs system damage without informing BKHOST technician.<br/>
            - Interfering directly with the client's website source code to fix errors (errors not caused by the server).</p>
        <p><strong style="color:#bf1718">Issues that BKHOST will not support:</strong></p>
        <p>- Server overload due to server resources is not enough to meet the needs of the applications that customers are installing and using on the server.<br/>
            - Customer interferes and installs system damage without informing BKHOST technician<br/>
            - Interfering directly with the client's website source code to fix errors .<em>(errors not caused by the server)</em>.<br/>
            - Requires installing applications that are not fully supported or beyond the BKHOST experience.<br/>
            - Requirements to research, integrate a solution that is not fully supported or exceeds the BKHOST technical expertise.<br/>
            - BKHOST will not be responsible for the data inside the server, customers need to have their own data backup policy.<br/>
        - Customer's use in violation of BKHOST's terms of use.</p>
    </div>
</div>

<?= $this->element('other_services2') ?>