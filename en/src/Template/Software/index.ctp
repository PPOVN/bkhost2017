<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/index.ctp with your own version.');
//endif;
?>
<h2 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h2>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/software.png', ['alt' => 'Software']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>List of software for server systems</h1>
                        <h3>List of copyright software for server services</h3>
                        <p>We provide specialized software for the VPS system, physical server as: : Cpanel, DirectAdmin, Plesk, LiteSpeed, Cloud Linux</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="software-tabs">
    <div class="container">
        <div id="software_tabs">
            <ul>
                <li><a href="#tab1" title="Cloud Linux">Cloud Linux</a></li>
                <li><a href="#tab2" title="Cpanel">Cpanel</a></li>
                <li><a href="#tab3" title="DirectAdmin">DirectAdmin</a></li>
                <li><a href="#tab4" title="Litespeed">Litespeed</a></li>
                <li><a href="#tab5" title="Paralleels Plesk">Paralleels Plesk</a></li>
            </ul>
            <div id="tab1">
                <h3>Cloud Linux</h3>
                <p>Nix OS is the first designed specifically for web hosting needs, especially the needs of the service provider Hosting (Hosting Provider).Cloud Linux uses LVE (Lightweight Virtual Environments) technologyto create a breakthrough in managing and sharing server resources for user accounts.</p>
                <p>On CloudLinux, customers are limited resources% CPU load.With CentOS, a user can run a full 99.9% CPU for the process of the website, but this number is limited according to the configuration of the provider. This ensures thatyour hosting, your website, and your website will not be affected by someone on the same server.In the case of DDOS's  attacks small and medium.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 Month</th>
                            <th>03 Month</th>
                            <th>06 Month</th>
                            <th>12 Month</th>
                            <th>Order</th>
                        </tr>
                        <tr>
                            <th class="green">CloudLinux - Internal</th>
                            <td>210.000</td>
                            <td>630.000</td>
                            <td>1.260.000</td>
                            <td>2.100.000 (Saving 420.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=143" title="Order Cloud Linux" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">CloudLinux - External</th>
                            <td>252.000</td>
                            <td>756.000</td>
                            <td>1.512.000</td>
                            <td>2.520.000 (Saving 504.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=144" title="Order Cloud Linux" class="btn btn-danger">Register now</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab2" style="display: none">
                <h3>Copyright Cpanel</h3>
                <strong>What is cPanel administration software?</strong>
                <p>Cpanel is a management system for web hosting servers.cPanel has many powerful features and gives administrators the ability to intervene deeply and accurately than for the specified set of capabilities to exploit server resources. Features of the cPanel system are divided into two levels: agent account and root account.Partitioning allows administrators to filter out unnecessary or little-used functions in an interfacemanagement interface regularly use and serve the purpose of training for new users.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 Month</th>
                            <th>03 Month</th>
                            <th>06 Month</th>
                            <th>12 Month</th>
                            <th>Order</th>
                        </tr>
                        <tr>
                            <th class="green">VPS - Internal</th>
                            <td>294.000</td>
                            <td>882.000</td>
                            <td>1.764.000</td>
                            <td>3.360.000 (Saving 168.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=146" title="Order Cpanel" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">VPS - External</th>
                            <td>315.000</td>
                            <td>945.000</td>
                            <td>1.890.000</td>
                            <td>3.675.000 (Saving 105.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=147" title="Order Cpanel" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Server - Internal</th>
                            <td>910.000</td>
                            <td>2.730.000</td>
                            <td>5.250.000</td>
                            <td>9.450.000 (Saving 1.050.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=148" title="Order Cpanel" class="btn btn-danger">Register now</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab3" style="display: none">
                <h3>DirectAdmin</h3>
                <p>It is a system software based on the Linux operating systemserve the purpose of administering the host sharing website (shared hosting). DA has soothing, simple again very handy for users. This management system don’t allows users to administer but also supports agency accounts. The product uses a web interface and provides good administration features for web hosting service providers, resellers, and end users.</p>
                <p>The strength of DirectAdmin is the ability to optimize management, use less resources and high security. Before installing DirectAdmin, you must ensure that VPS is registered with DirectAdmin. In addition, the VPS version is as functional as the server version, but optimized to run the least amount of memory, for DirectAdmin, You can install on any virtual machine and enjoy the lowest license fee for VPS</p>
                <p><strong>Basic features</strong></p>
                <p>Simple to Manager: DA is a system dedicated to the shared server, it is easy to divide and manage server resources.<br/>
                   Speed: DA is the management system quicklyand resource-less management system compared to other shared server management systems.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 Month</th>
                            <th>03 Month</th>
                            <th>06 Month</th>
                            <th>12 Month</th>
                            <th>Order</th>
                        </tr>
                        <tr>
                            <th class="green">Virtual server - VPS</th>
                            <td>300.000</td>
                            <td>550.000</td>
                            <td>1.000.000</td>
                            <td>1.900.000 (Saving 100.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=149" title="Order DirectAdmin" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Private server</th>
                            <td>350.000</td>
                            <td>600.000</td>
                            <td>1.100.000</td>
                            <td>1.900.000 (Saving 300.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=150" title="Order DirectAdmin" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Lifetime</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2.300.000 đ (Copyright forever)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=151" title="Order DirectAdmin" class="btn btn-danger">Register now</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab4" style="display: none">
                <h3>LITESPEED</h3>
                <p>LiteSpeed web server (LSWS) is one of the fastest and most efficient Linux based web servers currently, through a long development process (since 2002), to date has claimed superior processing capabilities. Exceeding Apache, the static LSWS file-processing rate can be up to six times faster than Apache, PHP processing speeds on the LSWS can be increased by 1.5 to 3 times that of Apache.</p>
                <p>With good management of CPU / Memory resources is one of the highlights of Litespeed even in the case of websites with large, flexible traffic in the transition from Apache web server to Litespeed web server, reducing Minor bottlenecks due to Apache cannot handle large amounts of traffic at the same time</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>01 Month</th>
                            <th>03 Month</th>
                            <th>06 Month</th>
                            <th>12 Month</th>
                            <th>Order</th>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - Enterprise<br/>(For VPS < 2GB RAM)</th>
                            <td>380.000</td>
                            <td>1.050.000</td>
                            <td>1.900.000</td>
                            <td>3.500.000 (Saving 300.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=152" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - Ultra<br/>(For VPS có RAM 2-8 GB)</th>
                            <td>520.000</td>
                            <td>1.560.000</td>
                            <td>2.890.000</td>
                            <td>5.040.000 (Saving 740.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=153" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 01 CPU<br/>(For VPS > 8GB RAM)</th>
                            <td>780.000</td>
                            <td>2.300.000</td>
                            <td>4.500.000</td>
                            <td>7.929.000 (Saving 1.071.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=154" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 02 CPU</th>
                            <td>1.250.000</td>
                            <td>3.536.000</td>
                            <td>6.570.000</td>
                            <td>12.500.000 đ (Saving 640.000 đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=155" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 04 CPU</th>
                            <td>1.600.000</td>
                            <td>4.500.000</td>
                            <td>8.980.000</td>
                            <td>16.980.000 (Saving 980.000đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=156" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Litespeed - 08 CPU</th>
                            <td>2.432.000</td>
                            <td>6.520.000</td>
                            <td>12.690.000</td>
                            <td>22.980.000 (Saving 2.400.000đ)</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=157" title="Order Litespeed" class="btn btn-danger">Register now</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="tab5" style="display: none">
                <h3>PARALLELS PLESK PANEL</h3>
                <strong>Copyright Parallels Plesk</strong>
                <p>Web Hosting Application top administrator for servers running Windows Server operating system.<br/>
                Parallels Plesk is the best solutionand most cost-effective solution for Servers, Virtual Servers (VPS) and Hosting. Plesk is the leading professional hosting management software of Parallels that is widely used by many service providers such as Server, VPS, Web Hosting, Domain ... The high automation feature helps businesses reduce costs, time in management, equipment investment and manpower.</p>
                <p>Plesk is a server management system developed by Parallels that can operate on both Windows and Linux operating systems, so it has flexibility and diversity of the operating system architecture on popular operating systems.Plesk has developmental and many businesses opt for solutions to manage servers, system management is a clear hierarchy with the ability to secure and interference into the system makes Plesk easily manage With user-friendly management interface, Plesk is increasingly asserted to be the number one choice in server management.</p>
                
                <div class="table-responsive mt30">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="white"></th>
                            <th>VPS<br/>vnđ/Month</th>
                            <th>Order (VPS)</th>
                            <th>Server<br/>vnđ/Month</th>
                            <th>Order (Server)</th>
                        </tr>
                        <tr>
                            <th class="green">Web Host Edition (Unlimited Domains)<br/>
                            (Minimum Registration  3 Month)</th>
                            <td>249.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=145" title="Order VPS" class="btn btn-danger">Register now</a></td>
                            <td>589.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=159" title="Order Server" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Web Pro Edition (30 Domains)<br/>
                            (Minimum Registration  3 Month)</th>
                            <td>149.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=160" title="Order VPS" class="btn btn-danger">Register now</a></td>
                            <td>149.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=158" title="Order Server" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Web Admin Edition (10 Domains) – sử dụng thêm Power Pack cho Windows<br/>
                            (Minimum Registration  6 Month)</th>
                            <td>49.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=162" title="Order VPS" class="btn btn-danger">Register now</a></td>
                            <td>49.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=163" title="Order Server" class="btn btn-danger">Register now</a></td>
                        </tr>
                        <tr>
                            <th class="green">Plesk Power Pack<br/>
                                (ManagePgSQL, MSSQL, Tomcat,ColdFusion)<br/>
                            Plesk software is not subject to VAT</th>
                            <td>95.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=164" title="Order VPS" class="btn btn-danger">Register now</a></td>
                            <td>210.000</td>
                            <td><a href="https://manage.bkhost.vn/cart.php?a=add&pid=165" title="Order Server" class="btn btn-danger">Register now</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--/.software-tabs-->