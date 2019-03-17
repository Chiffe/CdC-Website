<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;
use Cake\Core\Configure;
class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addFields([
            'name'  => ['type' => 'string'],
            'email' => ['type' => 'email'],
            'msg'   => ['type' => 'textarea']
        ]);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator
            ->notEmpty('name', 'Veuillez rentrer votre nom')
            ->add('name', [
                'notBlank' => [
                    'rule' => 'notBlank',
                    'message' => 'Veuillez rentrer un nom valide'
                ]
            ])
            ->requirePresence('name', true, 'Le champ "nom" est obligatoire')
            ->notEmpty('email', 'Veuillez rentrer un email')
            ->add('email', [
                'valid-email' => [
                    'rule' => ['email', true],
                    'message' => 'Veuillez rentrer un email valide'
                ]
            ])
            ->requirePresence('email', true, 'Le champ "email" est obligatoire')
            ->notEmpty('msg', 'Veuillez rentrer un message')
            ->add('msg', [
                'notBlank' => [
                    'rule' => 'notBlank',
                    'message' => 'Veuillez rentrer un message'
                ]
            ])
            ->requirePresence('msg', true, 'Le champ "Message" est obligatoire');
    }

    protected function _execute(array $data)
    {
        //Email CdC
        $Email = new Email('default');
        $Email->to(Configure::read('email_contact'));
        $Email->subject(__('Contact client'));
        $Email->template('contact');
        $Email->viewVars(['datas' => $data]);
        $Email->emailFormat('both');
        return $Email->send();
    }
}