<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $helpers = [
        'WyriHaximus/MinifyHtml.MinifyHtml',
    ];
    
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');
        $this->loadComponent('Paginator');
        $this->loadComponent('Commons');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        
        if ($this->params['controller'] != 'api') {
//            $this->_setLanguage();
        }

        // HTTP redirect to HTTPS
        if($_SERVER['REQUEST_SCHEME'] == 'http'){
            $this->redirect(SITE_URL . $_SERVER['REQUEST_URI']);
        }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    function _setLanguage() {
        //if the cookie was previously set, and Config.language has not been set
        //write the Config.language with the value from the Cookie
        //echo $this->Cookie->read('lang');
        $lang = $this->Cookie->read('lang');
        if ($lang != "vi") $lang = "vi";

        if (isset($this->Cookie) && $this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
            //$this->Session->write('Config.language', $this->Cookie->read('lang'));
            $this->Session->write('Config.language', $lang);
        }
        //if the user clicked the language URL
        else if (isset($this->params['language']) && ($this->params['language'] != $this->Session->read('Config.language')) ) {
            //then update the value in Session and the one in Cookie
            $this->Session->write('Config.language', $this->params['language']);
            $this->Cookie->write('lang', $this->params['language'], false, '20 days');
        }
    }

}
