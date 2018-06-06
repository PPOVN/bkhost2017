<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Domain/bieu_mau_ho_so_dang_ky_ten_mien.ctp with your own version.');
//endif;
?>
<div class="page-intro">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <?= $this->Html->image('frontend/quytrinh-bkhost-01.png', ['alt' => 'Quy trình']) ?>
                    </div>
                    <div class="col-sm-10">
                        <h1>FORM DOMAIN REGISTRATION DOCUMENTS</h1>
                        <h3>Forms for Vietnam domain name registration and International</h3>
                        <p>Please download the appropriate form from the Bkhost Website, then fill in the form and send it back to the BKHOST customer care staff.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.page-intro-->

<div class="lp-row-white">
    <div class="container t_center">
        <h2 class="mb30"><i class="fa fa-briefcase" aria-hidden="true"></i> form for agencies, organizations and enterprises</h2>
        <div class="table-responsive t_left">
            <table class="table table-striped table-bordered">
                <tr>
                    <th colspan="2">The declaration of domain name registration</th>
                </tr>
                <tr>
                    <td>The declaration of changing domain name information</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Application for domain name transfer </td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <th colspan="2">Form for individuals</th>
                </tr>
                <tr>
                    <td>Declaration of domain name registration</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>The declaration of changing domain name information</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Application for change </td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Application for domain name refund request</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <th colspan="2">Form for agencies, organizations registering domain names  ".GOV.VN"”</th>
                </tr>
                <tr>
                    <td>Declaration of changes information</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Commitments and explanations about the domain name registration</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>The declaration of changing domain name information</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <th colspan="2">Form to change the Registrar:</th>
                </tr>
                <tr>
                    <td>Transfer domain name from other registrar to BKHOST Vietnam</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <th colspan="2">Form to register the domain name protection </th>
                </tr>
                <tr>
                    <td>Application to register the domain name protection,</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Application to changing register the domain name protection</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
                <tr>
                    <td>Application to domain name reservation</td>
                    <td><a href="#"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->element('domain_pricing') ?>
<?= $this->element('contact_highlight') ?>