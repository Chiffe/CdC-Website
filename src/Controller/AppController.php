<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Form\ContactForm;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Core\Configure;
use Cake\Utility\Hash;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Csrf');
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);

        //On charge l'objet ContactForm
        $contact = new ContactForm();
        $this->set('contact', $contact);
    }

    public function beforeRender(Event $event){
        parent::beforeRender($event);
        if(empty($this->title_layout))
            $this->title_layout = 'ComdeChef';
        else
            $this->title_layout.= ' - ComdeChef';

        /*if(isset($this->request->params['prefix']) && $this->request->params['prefix'] === 'admin'){
            if(empty($this->viewBuilder()->layout()))
                $this->viewBuilder()->layout('admin_layout');
            $this->title_layout = 'Administration - Bew-Works';
        }*/

        if($this->request->is('ajax'))
            $this->viewBuilder()->layout('ajax');

        $this->set('title_layout', $this->title_layout);
    }

    /**
     * Send a email.
     *
     * @param string $to A string of destination address.
     * @param string $subject A string of email subject.
     * @param string $template A string of email template.
     * @param array $viewVars A array with variables to be used in the view.     *
     * @param array $attachments A variable with attachments to send
     * @param string $config A string of configuration email.
     * @return bool
     */
    public function sendEmail($to, $subject = 'Sans objet', $template = 'default', $viewVars = array(), $attachments = array(), $config = 'default') {
        if (empty($to))return false;

        $Email = new Email($config);
        $Email->to($to);
        $Email->subject(__($subject));
        $Email->template($template);
        $Email->viewVars($viewVars);
        $Email->emailFormat('both');
        $Email->attachments($attachments);
        return $Email->send();
    }

    /**
     * Test Captcha Google
     *
     * @param string $secret La clé secrète du domaine
     * @param string $data La clé site du domaine
     * @return bool
     */
    protected function postToApi($secret, $data){
        //Captcha invalid
        if(!isset($data['g-recaptcha-response']) || empty($secret))
            return false;

        $postData = array('response' => $data['g-recaptcha-response'], 'secret' => $secret);

        //Curl
        $curl = curl_init();
        $optionsCurl = array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify'
        );
        curl_setopt_array($curl, $optionsCurl);
        $res = curl_exec($curl);
        curl_close($curl);

        $res = json_decode($res, true);

        return $res['success'];
    }

    /**
     * Récupère les erreurs de l'entity et les affichent
     *
     * @param object $entity
     * @return bool
     */
    protected function displayEntityError($entity){
        //Si il y a des erreurs
        if(!empty($entity->errors())){
            if(count($entity->errors()) > 1){
                $this->Flash->greatWarning(Hash::extract($entity->errors(), '{s}.{s}'));
            }else
                $this->Flash->warning(Hash::extract($entity->errors(), '{s}.{s}')[0]);
            return true;
        }
        return false;
    }

    public function isBewWorks(){
        return (in_array($this->request->clientIp(), Configure::read('ipBW')));
    }
}
