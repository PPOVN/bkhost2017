<?php

namespace App\Controller;

use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Routing\Router;

class DomainController extends AppController {

    private $WHOIS_SERVERS = array(
        "com" => array("whois.verisign-grs.com", "whois.crsnic.net"),
        "net" => array("whois.verisign-grs.com", "whois.crsnic.net"),
        "org" => array("whois.pir.org", "whois.publicinterestregistry.net"),
        "info" => array("whois.afilias.info", "whois.afilias.net"),
        "biz" => array("whois.neulevel.biz"),
        "us" => array("whois.nic.us"),
        "uk" => array("whois.nic.uk"),
        "co.uk" => array("whois.nic.uk"),
        "ca" => array("whois.cira.ca"),
        "tel" => array("whois.nic.tel"),
        "ie" => array("whois.iedr.ie", "whois.domainregistry.ie"),
        "it" => array("whois.nic.it"),
        "li" => array("whois.nic.li"),
        "no" => array("whois.norid.no"),
        "cc" => array("whois.nic.cc"),
        "eu" => array("whois.eu"),
        "nu" => array("whois.nic.nu"),
        "au" => array("whois.aunic.net", "whois.ausregistry.net.au"),
        "de" => array("whois.denic.de"),
        "ws" => array("whois.worldsite.ws", "whois.nic.ws", "www.nic.ws"),
        "sc" => array("whois2.afilias-grs.net"),
        "mobi" => array("whois.dotmobiregistry.net"),
        "pro" => array("whois.registrypro.pro", "whois.registry.pro"),
        "edu" => array("whois.educause.net", "whois.crsnic.net"),
        "tv" => array("whois.nic.tv", "tvwhois.verisign-grs.com"),
        "travel" => array("whois.nic.travel"),
        "name" => array("whois.nic.name"),
        "in" => array("whois.inregistry.net", "whois.registry.in"),
        "me" => array("whois.nic.me", "whois.meregistry.net"),
        "at" => array("whois.nic.at"),
        "be" => array("whois.dns.be"),
        "cn" => array("whois.cnnic.cn", "whois.cnnic.net.cn"),
        "asia" => array("whois.nic.asia"),
        "ru" => array("whois.ripn.ru", "whois.ripn.net"),
        "ro" => array("whois.rotld.ro"),
        "aero" => array("whois.aero"),
        "fr" => array("whois.nic.fr"),
        "se" => array("whois.iis.se", "whois.nic-se.se", "whois.nic.se"),
        "nl" => array("whois.sidn.nl", "whois.domain-registry.nl"),
        "nz" => array("whois.srs.net.nz", "whois.domainz.net.nz"),
        "mx" => array("whois.nic.mx"),
        "tw" => array("whois.apnic.net", "whois.twnic.net.tw"),
        "ch" => array("whois.nic.ch"),
        "hk" => array("whois.hknic.net.hk"),
        "ac" => array("whois.nic.ac"),
        "ae" => array("whois.nic.ae"),
        "af" => array("whois.nic.af"),
        "ag" => array("whois.nic.ag"),
        "al" => array("whois.ripe.net"),
        "am" => array("whois.amnic.net"),
        "as" => array("whois.nic.as"),
        "az" => array("whois.ripe.net"),
        "ba" => array("whois.ripe.net"),
        "bg" => array("whois.register.bg"),
        "bi" => array("whois.nic.bi"),
        "bj" => array("www.nic.bj"),
        "br" => array("whois.nic.br"),
        "bt" => array("whois.netnames.net"),
        "by" => array("whois.ripe.net"),
        "bz" => array("whois.belizenic.bz"),
        "cd" => array("whois.nic.cd"),
        "ck" => array("whois.nic.ck"),
        "cl" => array("nic.cl"),
        "coop" => array("whois.nic.coop"),
        "cx" => array("whois.nic.cx"),
        "cy" => array("whois.ripe.net"),
        "cz" => array("whois.nic.cz"),
        "dk" => array("whois.dk-hostmaster.dk"),
        "dm" => array("whois.nic.cx"),
        "dz" => array("whois.ripe.net"),
        "ee" => array("whois.eenet.ee"),
        "eg" => array("whois.ripe.net"),
        "es" => array("whois.ripe.net"),
        "fi" => array("whois.ficora.fi"),
        "fo" => array("whois.ripe.net"),
        "gb" => array("whois.ripe.net"),
        "ge" => array("whois.ripe.net"),
        "gl" => array("whois.ripe.net"),
        "gm" => array("whois.ripe.net"),
        "gov" => array("whois.nic.gov"),
        "gr" => array("whois.ripe.net"),
        "gs" => array("whois.adamsnames.tc"),
        "hm" => array("whois.registry.hm"),
        "hn" => array("whois2.afilias-grs.net"),
        "hr" => array("whois.ripe.net"),
        "hu" => array("whois.ripe.net"),
        "il" => array("whois.isoc.org.il"),
        "int" => array("whois.isi.edu"),
        "iq" => array("vrx.net"),
        "ir" => array("whois.nic.ir"),
        "is" => array("whois.isnic.is"),
        "je" => array("whois.je"),
        "jp" => array("whois.jprs.jp"),
        "kg" => array("whois.domain.kg"),
        "kr" => array("whois.nic.or.kr"),
        "la" => array("whois2.afilias-grs.net"),
        "lt" => array("whois.domreg.lt"),
        "lu" => array("whois.restena.lu"),
        "lv" => array("whois.nic.lv"),
        "ly" => array("whois.lydomains.com"),
        "ma" => array("whois.iam.net.ma"),
        "mc" => array("whois.ripe.net"),
        "md" => array("whois.nic.md"),
        "mil" => array("whois.nic.mil"),
        "mk" => array("whois.ripe.net"),
        "ms" => array("whois.nic.ms"),
        "mt" => array("whois.ripe.net"),
        "mu" => array("whois.nic.mu"),
        "my" => array("whois.mynic.net.my"),
        "nf" => array("whois.nic.cx"),
        "pl" => array("whois.dns.pl"),
        "pr" => array("whois.nic.pr"),
        "pt" => array("whois.dns.pt"),
        "sa" => array("saudinic.net.sa"),
        "sb" => array("whois.nic.net.sb"),
        "sg" => array("whois.nic.net.sg"),
        "sh" => array("whois.nic.sh"),
        "si" => array("whois.arnes.si"),
        "sk" => array("whois.sk-nic.sk"),
        "sm" => array("whois.ripe.net"),
        "st" => array("whois.nic.st"),
        "su" => array("whois.ripn.net"),
        "tc" => array("whois.adamsnames.tc"),
        "tf" => array("whois.nic.tf"),
        "th" => array("whois.thnic.net"),
        "tj" => array("whois.nic.tj"),
        "tk" => array("whois.nic.tk"),
        "tl" => array("whois.domains.tl"),
        "tm" => array("whois.nic.tm"),
        "tn" => array("whois.ripe.net"),
        "to" => array("whois.tonic.to"),
        "tp" => array("whois.domains.tl"),
        "tr" => array("whois.nic.tr"),
        "ua" => array("whois.ripe.net"),
        "uy" => array("nic.uy"),
        "uz" => array("whois.cctld.uz"),
        "va" => array("whois.ripe.net"),
        "vc" => array("whois2.afilias-grs.net"),
        "ve" => array("whois.nic.ve"),
        "vg" => array("whois.adamsnames.tc"),
        "yu" => array("whois.ripe.net")
    );
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
        $meta_description = __('Nhà đăng ký Tên miền giá rẻ Việt Nam trực thuộc VNNIC, được tổ chức Tên miền quốc tế ICANN công nhận. Hãy đăng ký ngay hôm nay để nhận tên miền đẹp nhất');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Domain', 'action' => 'index']);
        $og_image = SITE_URL . '/img/frontend/domain-gift.png';
        
        $this->set('title', __('Tên miền'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function bieuMauHoSoDangKyTenMien() {
        $meta_description = __('Quý khách vui lòng Download biểu mẫu phù hợp từ Website Bkhost, Sau đó điền thông tin vào biểu mẫu và gửi lại cho nhân viên chăm sóc khách hàng BKHOST');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Domain', 'action' => 'bieuMauHoSoDangKyTenMien']);
        $og_image = SITE_URL . '/img/frontend/domain-gift.png';
        
        $this->set('title', __('Biểu mẫu hồ sơ đăng ký Tên miền'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function quyTrinhDangKyTenMien() {
        $meta_description = __('Đăng ký trực tuyến trên website Bkhost.vn và làm theo đúng hướng dẫn trên website và thông tin chúng tôi gửi vào email ngay sau khi đăng ký trên website');
        $og_type = "article";
        $og_url = SITE_URL . Router::url(['controller' => 'Domain', 'action' => 'quyTrinhDangKyTenMien']);
        $og_image = SITE_URL . '/img/frontend/domain-gift.png';
        
        $this->set('title', __('Quy trình đăng ký Tên miền'));
        $this->set('meta_description', $meta_description);
        $this->set('og_type', $og_type);
        $this->set('og_url', $og_url);
        $this->set('og_image', $og_image);
        $this->set('canonical', $og_url);
    }

    public function search() {
        $result = "";
        $result_domain_check = "";
        if ($this->request->is('post')) {
            $domain = $this->request->data('domain');
            $tlds = $this->request->data('tld');
            
            if(strpos($domain, ".") !== false){
                $domains = explode(".", $domain);
                $new_tld = "";
                for($i = 1; $i < count($domains); $i++){ // ignore first item
                    $new_tld .= $domains[$i];
                    if($i < count($domains) - 1){
                        $new_tld .= ".";
                    }
                }
                if(!in_array($new_tld, $tlds)){
                    array_unshift($tlds, $new_tld);
                }

                $domain = $domains[0];
                $result_domain_check = '<span class="ajax-loader" data-domain="' . $domain . '" data-tld="' . $new_tld . '"></span>';
            }
            
            foreach ($tlds as $tld) {
                $_domain = $domain . "." . $tld;
                $result .= '<tr class="checkdomain" data-domain="' . $domain . '" data-tld="' . $tld . '">
                                <td><span>' . $_domain . '</span></td>
                                <td class="t_center status"><span class="ajax-loader"></span></td>
                                <td class="t_center button"><span class="ajax-loader"></span></td>
                            </tr>';
            }
        } else {
            $this->redirect(['controller' => 'Domain', 'action' => 'index']);
        }
        
        $this->set('result_domain_check', $result_domain_check);
        $this->set('result', $result);
        $this->set('tlds', $tlds);
        $this->set('title', __('Đăng ký Tên miền'));
    }
    
    public function checkprimary() {
        $domain = $this->request->query('domain');
        $tld = $this->request->query('tld');
        $_domain = $domain . "." . $tld;
        $siteurl = SITE_URL;
        $result = "";
        if($this->isDomainAvailable($_domain)){
            $result = <<<HTML
                <p class="t_green t_center font20 mb20"><strong>Xin chúc mừng!</strong> Bạn có thể 
                    đăng ký tên miền <span class="bold">{$_domain}</span> để bảo vệ thương hiệu của bạn 
                    <a href="http://manage.bkhost.vn/cart.php?a=add&amp;domain=register&amp;sld={$domain}&amp;tld=.{$tld}" class="btn btn-success t_white" target="_blank">Đăng ký ngay</a> 
                </p>
HTML;
        } else {
            $result = <<<HTML
                <p class="t_red t_center font20 mb20"><strong>Rất tiếc</strong>, tên miền <span class="bold">{$_domain}</span> 
                - Đã được đăng ký 
                <span class="btn btn-warning t_white .action-button1 open-modal" data-source="{$siteurl}/domain/whois/?domain={$domain}&tld={$tld}">Xem thông tin</span>
                </p>
HTML;
        }
        $this->set('result', $result);
    }
    
    public function check() {
        $domain = $this->request->query('domain');
        $tld = $this->request->query('tld');
        $_domain = $domain . "." . $tld;
        $result = array();
        if(!$this->isDomainAvailable($_domain)){
            $result['status'] = '<span>Đã đăng ký</span>';
            $result['btn'] = '<span style="color:#fff;" class="btn btn-warning .action-button1 open-modal" data-source="'.SITE_URL.'/domain/whois/?domain='.$domain.'&tld='.$tld.'">Xem thông tin</span>';
        } else {
            $result['status'] = '<span class="label bg-green">Chưa đăng ký</span>';
            $result['btn'] = '<a href="http://manage.bkhost.vn/cart.php?a=add&amp;domain=register&amp;sld='.$domain.'&amp;tld=.'.$tld.'" class="btn btn-success" target="_blank">Đăng ký ngay</a>';
        }
        $this->set('result', $result);
    }
    
    public function whois() {
        $domain = $this->request->query('domain');
        $tld = $this->request->query('tld');
//        $result = '<pre>' . $this->whoislookup($domain . "." . $tld) . '</pre>';
        
        // Get whois from Whois.net.vn
//        $result = file_get_contents("http://www.whois.net.vn/domain.php?act=info&domain=" . $domain . "&ext=" . $tld);
        $result = file_get_contents("http://www.whois.net.vn/checkdomain.php?act=getwhois&domain={$domain}.{$tld}");
        
        // Get whois from Pavietnam
//        $username = "bkhostvn";
//        $api_key = "4f66e9e3e08b6602335ca75d8ddb148e";
//        $result = file_get_contents("https://daily.pavietnam.vn/interface_test.php?username={$username}&apikey={$api_key}&cmd=get_whois&domain={$domain}.{$tld}");
        
        // Get whois from MatBao
//        $result = file_get_contents("http://whois.matbao.vn/ViewDetail.ashx?domain={$domain}.{$tld}&Type=0");
        $this->set('result', $result);
    }

    ########################### HELPER ###########################
    
    private function isDomainAvailable($domain) {
        // Check by whois.net.vn
//        $content = file_get_contents("http://www.whois.net.vn/whois.php?domain=" . $domain);
//        $content = substr($content, strlen($content) - 1, 1);
//        if($content === "0"){
//            return true;
//        }
        
        // Check by whois.pavietnam.net
        $content = file_get_contents("http://whois.pavietnam.net/whois.php?domain=" . $domain);
        $content = substr($content, strlen($content) - 1, 1);
        if($content === "1"){
            return true;
        }
        return false;
    }
    
    private function whoislookup($domain) {
        $domain = trim($domain); //remove space from start and end of domain
        if (substr(strtolower($domain), 0, 7) == "http://")
            $domain = substr($domain, 7); // remove http:// if included
        if (substr(strtolower($domain), 0, 4) == "www.")
            $domain = substr($domain, 4); //remove www from domain
        if (preg_match("/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/", $domain))
            return $this->queryWhois("whois.lacnic.net", $domain);
        elseif (preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
            $domain_parts = explode(".", $domain);
            $tld = strtolower(array_pop($domain_parts));
            $server = $this->WHOIS_SERVERS[$tld][0];
            if (!$server) {
                return "Error: No appropriate Whois server found for $domain domain!";
            }
            $res = $this->queryWhois($server, $domain);
            while (preg_match_all("/Whois Server: (.*)/", $res, $matches)) {
                $server = array_pop($matches[1]);
                $res = $this->queryWhois($server, $domain);
            }
            return $res;
        } else
            return "Invalid Input";
    }
    
    private function queryWhois($server, $domain) {
        $fp = @fsockopen($server, 43, $errno, $errstr, 20) or die("Socket Error " . $errno . " - " . $errstr);
        if ($server == "whois.verisign-grs.com")
            $domain = "=" . $domain;
        fputs($fp, $domain . "\r\n");
        $out = "";
        while (!feof($fp)) {
            $out .= fgets($fp);
        }
        fclose($fp);
        return $out;
    }
}
