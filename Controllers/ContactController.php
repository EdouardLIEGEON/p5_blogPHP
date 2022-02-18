<?php
namespace App\Controllers;
use App\Core\Form;

class ContactController extends Controller
{
    public function contact(){

        $form = new Form;

        $form->debutForm()
                ->ajoutLabelFor('name', 'Nom et Prénom :')
                ->ajoutInput('name', 'name', ['id'=> 'name', 'class'=> 'form-control'])
                ->ajoutLabelFor('email', 'E-mail :')
                ->ajoutInput('email', 'email', ['id'=> 'password', 'class'=> 'form-control'])
                ->ajoutLabelFor('message', 'Laissez-moi un message :')
                ->ajoutTextarea('message','message', ['id'=>'message', 'class'=>'form-control'])
                ->ajoutBouton('Envoyer', ['class'=> 'btn btn-primary'])
                ->finForm();

                $this->render('/contact', ['contactForm' => $form->create()]);
    }
}