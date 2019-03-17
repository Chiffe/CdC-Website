<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Core\Configure;
class FrontblockHelper extends Helper
{
    public $helpers = ['Html', 'Url'];

    public function explainBlock($str){
        //Si aucune chaîne à retourner
        if(empty($str))
            return '';

        //Sortie avec la valeur str
        return '<p class="cont_explain"><span class="block_explain">'.$str.'</span></p>';
    }

    /**
     * isBW : Permet de définir si l'utilisateur utilise un pc super admin
     *
     * @return bool
     */
    public function isBW(){
        return (in_array($this->request->clientIp(), Configure::read('ipBW')));
    }
}
