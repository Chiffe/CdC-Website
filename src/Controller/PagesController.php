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
use Cake\Core\Configure;
use Cake\Event\Event;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);

        /* On récupère les actions du controller */
        $actions = get_class_methods($this);
        $parentMethods = get_class_methods(get_parent_class($this));
        $actions = array_diff($actions, $parentMethods);

        if(!in_array($this->request->param('action'), $actions))
            return $this->redirect('/');
    }

    public function home(){
    }

    public function services(){
        $this->title_layout = 'Nos services';
    }

    public function contact(){
        if($this->request->is('post')){
            $requestData = $this->request->data;

            if(!$this->postToApi(Configure::read('secret'), $requestData)){
                $this->Flash->warning('Le captcha est incorrect.');
                return $this->redirect($this->referer());
            }

            //On envoie la demande
            $contact = new ContactForm();
            if($contact->execute($requestData))
                $this->Flash->success('Votre prise de contact a été enregistré. Nous reviendrons vers vous au plus vite.');
            else{
                $this->Flash->warning('Erreur lors de la soumission de votre formulaire.');
                $this->displayEntityError($contact);
            }
            return $this->redirect($this->referer());
        }
        return $this->redirect('/');
    }

    public function mentionsLegales(){
        $this->title_layout = 'Mentions Légales';
    }
}
