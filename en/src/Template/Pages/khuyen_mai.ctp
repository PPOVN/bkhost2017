<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Software/khuyen_mai.ctp with your own version.');
//endif;
?>
<h1 class="hide hidden">Web Hosting, Tên Miền, Cloud VPS, Email, Server</h1>
<div id="BannerKMGiangSinh">
    <div class="MainObject">
        <div class="container">
            <div class="vi_element countdown">
                <div class="countdown_clock" id="countdown_6186"></div>
            </div>
            <script type="text/template" class="example_template">
                <div class="time <%= label %>">
                    <span class="count curr top"><%= curr %></span>
                    <span class="count next top"><%= next %></span>
                    <span class="count next bottom"><%= next %></span>
                    <span class="count curr bottom"><%= curr %></span>
                    <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                </div>
            </script>
        </div>
    </div>
</div>

<div class="container">
    <!--BEGIN CLOUD VPS-->
    <div class="promo-block">
        <h2>KHUYẾN MẠI <span class="name">CLOUD SSD VPS</span></h2>
        <div class="desc"> Hệ thống được đầu tư 100% công nghệ SSD Intel Enterprise và đường truyền tốc độ cao</div>
        <div class="promoList owl-carousel">
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/cloud-vps-ssd.png', ['alt' => 'VPS']) ?></div>
                    <div class="text">
                        <h3>CLOUD VPS 01</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 30% VĨNH VIỄN KHI ĐĂNG KÝ MỚI</span></strong><br />
                               RAM: 1 GB + 512 MB free<br />
                                vCPU: 2 CORE<br />
                                HDD: 25 GB [SSD Cloud Storage]<br />
                                Software: Free DirectAdmin<br />
								Địa chỉ IP: 1<br />
								Công Nghệ ảo hóa : Vmware<br />
                                <span style="color: #ff0000;">Tặng RAM khi đăng ký ít nhất 6 tháng</span></p>
                        </div>
                        <p class="origin">Giá gốc:<span> 200.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 140.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMVPST730</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=189" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>30%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/cloud-vps-ssd.png', ['alt' => 'VPS']) ?></div>
                    <div class="text">
                        <h3>CLOUD VPS 02</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 30% VĨNH VIỄN KHI ĐĂNG KÝ MỚI</span></strong><br />
                               RAM: 2 GB + 512 MB free<br />
                                vCPU: 2 CORE<br />
                                HDD: 40 GB [SSD Cloud Storage]<br />
                                Software: Free DirectAdmin<br />
								Địa chỉ IP: 1<br />
								Công Nghệ ảo hóa : Vmware<br />
                                <span style="color: #ff0000;">Tặng RAM khi đăng ký ít nhất 6 tháng</span></p>
                        </div>
                        <p class="origin">Giá gốc:<span> 400.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 280.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMVPST730</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=190" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>30%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/cloud-vps-ssd.png', ['alt' => 'VPS']) ?></div>
                    <div class="text">
                        <h3>CLOUD VPS 03</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 30% VĨNH VIỄN KHI ĐĂNG KÝ MỚI</span></strong><br />
                               RAM: 4 GB + 512 MB free<br />
                                vCPU: 4 CORE<br />
                                HDD: 80 GB [SSD Cloud Storage]<br />
                                Software: Free DirectAdmin<br />
								Địa chỉ IP: 1<br />
								Công Nghệ ảo hóa : Vmware<br />
                                <span style="color: #ff0000;">Tặng RAM khi đăng ký ít nhất 6 tháng</span></p>
                        </div>
                        <p class="origin">Giá gốc:<span> 800.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 560.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMVPST730</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=191" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>30%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/cloud-vps-ssd.png', ['alt' => 'VPS']) ?></div>
                    <div class="text">
                        <h3>CLOUD VPS 04</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 30% VĨNH VIỄN KHI ĐĂNG KÝ MỚI</span></strong><br />
                               RAM: 6 GB + 512 MB free<br />
                                vCPU: 4 CORE<br />
                                HDD: 100GB [SSD Cloud Storage]<br />
                                Software: Free DirectAdmin<br />
								Địa chỉ IP: 1<br />
								Công Nghệ ảo hóa : Vmware<br />
                                <span style="color: #ff0000;">Tặng RAM khi đăng ký ít nhất 6 tháng</span></p>
                        </div>
                        <p class="origin">Giá gốc:<span> 1.200.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 840.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMVPST730</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=192" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>30%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/cloud-vps-ssd.png', ['alt' => 'VPS']) ?></div>
                    <div class="text">
                        <h3>CLOUD VPS 5</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 30% VĨNH VIỄN KHI ĐĂNG KÝ MỚI</span></strong><br />
                               RAM: 8 GB + 512 MB free<br />
                                vCPU: 8 CORE<br />
                                HDD: 150 GB [SSD Cloud Storage]<br />
                                Software: Free DirectAdmin<br />
								Địa chỉ IP: 1<br />
								Công Nghệ ảo hóa : Vmware<br />
                                <span style="color: #ff0000;">Tặng RAM khi đăng ký ít nhất 6 tháng</span></p>
                        </div>
                        <p class="origin">Giá gốc:<span> 1.600.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 1.120.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMVPST730</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=193" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>30%</span></div>
                </div>
            </div><!--/.promo-->
        </div>
    </div>
    <!--END CLOUD VPS-->

    <!--BEGIN HOSTING-->
    <div class="promo-block">
        <h2>KHUYẾN MẠI <span class="name">HOSTING</span></h2>
        <div class="desc">Dưới đây là danh sách khuyến mãi các gói Hosting để bạn lựa chọn</div>
        <div class="promoList owl-carousel">
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                    <div class="text">
                        <h3>START</h3>
                        <div class="desc">
						<p><strong><span style="color: #ff0000;">GIẢM 40% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                                Dung Lượng : 700 MB<br />
                                Băng Thông : 20 GB<br />
                                Addon Domain : 1<br />
								Email Account: 5 Email<br />
								Backup: 1 Tuần / 1 Bản
                        </div>
                        <p class="origin">Giá gốc:<span> 23.500đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 14.100 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMHT740</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=10" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>40%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                    <div class="text">
                        <h3>START PLUS</h3>
                        <div class="desc">
                          <p><strong><span style="color: #ff0000;">GIẢM 40% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                                Dung Lượng : 1 GB<br />
                                Băng Thông : 50 GB<br />
                                Addon Domain : 2<br />
								Email Account: 10 Email<br />
								Backup: 1 Tuần / 1 Bản
                        </div>
                        <p class="origin">Giá gốc:<span> 40.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 24.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMHT740</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=11" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>40%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                    <div class="text">
                        <h3>SILVER</h3>
                        <div class="desc">
                          <p><strong><span style="color: #ff0000;">GIẢM 40% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                                Dung Lượng : 2 GB<br />
                                Băng Thông : Unlimited<br />
                                Addon Domain : 3<br />
								Email Account: Unlimited<br />
								Backup: 1 Tuần / 1 Bản
                        </div>
                        <p class="origin">Giá gốc:<span> 80.500đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 32.200 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMHT740</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=12" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>40%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                    <div class="text">
                        <h3>SILVER PLUS</h3>
                        <div class="desc">
                           <p><strong><span style="color: #ff0000;">GIẢM 40% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                                Dung Lượng : 3 GB<br />
                                Băng Thông : Unlimited<br />
                                Addon Domain : 4<br />
								Email Account: Unlimited<br />
								Backup: 1 Tuần / 1 Bản
                        </div>
                        <p class="origin">Giá gốc:<span> 125.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 75.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMHT740</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=13" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>40%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/hosting_km.png', ['alt' => 'Hosting']) ?></div>
                    <div class="text">
                        <h3>GOLD</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 40% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                                Dung Lượng : 10 GB<br />
                                Băng Thông : Unlimited<br />
                                Addon Domain : 6<br />
								Email Account: Unlimited<br />
								Backup: 1 Tuần / 1 Bản
                        </div>
                        <p class="origin">Giá gốc:<span> 165.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 99.000 đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMHT740</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=14" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>40%</span></div>
                </div>
            </div><!--/.promo-->
			            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="text">                     
                        <p class="time">
                </div>
            </div><!--/.promo-->
        </div>
    </div>
    <!--END HOSTING-->
    
    <!--BEGIN HOSTING-->
    <div class="promo-block">
        <h2>KHUYẾN MẠI <span class="name">THUÊ MÁY CHỦ</span></h2>
        <div class="desc">Dưới đây là danh sách khuyến mãi các gói THUÊ MÁY CHỦ để bạn lựa chọn</div>
        <div class="promoList owl-carousel">
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/dellr410-server.png', ['alt' => 'Thuê máy chủ']) ?></div>
                    <div class="text">
                        <h3>SERVER R410 E5620</h3>
                        <div class="desc">
						<p><strong><span style="color: #ff0000;">GIẢM 15% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                            CPU : 2* E5620 2,40 GHz 12M Cache <br />
                            RAM: 8 GB<br />
                            HDD : 2 x 300 GB SAS 15K<br />
                            RAID : 6IR<br />
							Datacenter: VIETTEL,FPT<br />
							Network: 100Mbps/ 3Mbps
                        </div>
                        <p class="origin">Giá gốc:<span>2.450.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span>2.082.000đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMSVT715</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=70" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>15%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/dellr410-server.png', ['alt' => 'Thuê máy chủ']) ?></div>
                    <div class="text">
                        <h3>SERVER R410 X5650</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 15% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                            CPU : 2* X5650 2,66 GHz 12M Cache <br />
                            RAM: 16 GB<br />
                            HDD : 2 x 300 GB SAS 15K<br />
                            RAID : 6IR<br />
							Datacenter: VIETTEL,FPT<br />
							Network: 100Mbps/ 3Mbps
                        </div>
                        <p class="origin">Giá gốc:<span> 2.550.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 2.167.000đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMSVT715</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=73" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>15%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/dellr410-server.png', ['alt' => 'Thuê máy chủ']) ?></div>
                    <div class="text">
                        <h3>SERVER R320 E5-2420</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 15% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                            CPU : 2* E5-2420 1,90 GHz 15M cache <br />
                            RAM: 16 GB<br />
                            HDD : 2 x 300 GB SAS 15K<br />
                            RAID : 6IR<br />
							Datacenter: VIETTEL,FPT<br/>
							Network: 100Mbps/ 3Mbps
                        </div>
                        <p class="origin">Giá gốc:<span> 3.300.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 2.805.000đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMSVT715</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=74" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>15%</span></div>
                </div>
            </div><!--/.promo-->
            <div class="promo">
                <div class="content">
                    <div class="image"><?= $this->Html->image('promo/Dell-PowerEdge-R720-992x595.jpg', ['alt' => 'Thuê máy chủ']) ?></div>
                    <div class="text">
                            <h3>SERVER R720 E5-2640</h3>
                        <div class="desc">
                            <p><strong><span style="color: #ff0000;">GIẢM 15% TRỌN ĐỜI KHI ĐĂNG KÝ MỚI</span></strong><br />
                            CPU : 2* E5-2640 2,50 GHz 15M cache, <br />
                            RAM: 16 GB<br />
                            HDD : 2 x 300 GB SAS 15K<br />
                            RAID : 6IR<br />
							Datacenter: VIETTEL,FPT<br />
							Network: 100Mbps/ 3Mbps
                        </div>
                        <p class="origin">Giá gốc:<span> 4.250.000đ/tháng</span></p>
                        <p class="afterPromo">Giá khuyến mãi:<span> 3.612.500đ/tháng</span></p>
                        <p class="time">
                            <i class="fa fa-clock-o"></i> Hết hiệu lực trong:
                            <span class="countDown" data-end="2017-08-05 23:59:59"></span>
                        </p>
                    </div>
                    <div class="CodeArea"><div class="code">CODE: <span class="the_code">KMSVT715</span></div></div>
                    <div class="LinkButton">
                        <a href="https://manage.bkhost.vn/cart.php?a=add&pid=140" target="_blank" class="link">ĐĂNG KÝ NGAY</a>
                    </div>
                    <div class="tag"><span>15%</span></div>
                </div>
            </div><!--/.promo-->
        </div>
    </div>
    <!--END HOSTING-->

    
    <div class="Note">
        <strong>Quý khách hàng lưu ý:</strong>
        <ul>
            <li>Khuyến mãi không áp dụng đồng thời với các chương trình khuyến mãi khác.</li>
            <li>Khuyến mãi không áp dụng cho các Đại lý tại BKHOST.</li>
            <li>Quý khách vui lòng không hủy dịch vụ trước thời hạn.</li>
            <li>Đơn hàng hợp lệ được hưởng khuyến mãi khi thanh toán trước ngày 05/8/2017</li>
        </ul>
    </div>
</div>

<?= $this->Html->css('countDown.css', ['block' => true]) ?>
<?= $this->Html->css('promo.css', ['block' => true]) ?>
<?php echo $this->Html->script(['countdown.min.js', 'moment-countdown.min.js'], ['type' => 'text/javascript', 'block' => true]); ?>
<?php echo $this->Html->script('promo.js', ['type' => 'text/javascript', 'block' => true]); ?>