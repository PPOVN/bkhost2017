<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//if (!Configure::read('debug')):
//    throw new NotFoundException('Please replace src/Template/Element/contact_highlight.ctp with your own version.');
//endif;
?>
<div class="home-contact hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-2 hidden-sm"><span class="person"></span></div>
            <div class="col-md-6 col-sm-8">
                <div class="txt">
                    <span>Liên hệ với chúng tôi!</span> Chúng tôi sẽ hỗ trợ bạn bất cứ lúc nào.
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="tel:02462591442" class="btn">024.6259.1442</a>
            </div>
        </div>
    </div>
</div><!--/.home-contact-->