<?php
namespace App\Controllers;
use App\Core\Form;

class ContactController extends Controller
{
    public function index(){

        $form = new Form;

        $form->debutForm()
                ->ajoutLabelFor('name', 'Nom et Prénom :')
                ->ajoutInput('name', 'name', ['id'=> 'name', 'class'=> 'form-control'])
                ->ajoutLabelFor('email', 'E-mail :')
                ->ajoutInput('email', 'email', ['id'=> 'email', 'class'=> 'form-control'])
                ->ajoutLabelFor('message', 'Laissez-moi un message :')
                ->ajoutTextarea('message','', ['id'=>'message', 'class'=>'form-control'])
                ->ajoutBouton('Envoyer', ['class'=> 'btn btn-primary'])
                ->finForm();

                $this->render('contact/index', ['form' => $form->create()]);

        if(Form::validate($_POST, ['name', 'email', 'message'])){
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $message = strip_tags($_POST['message']);
            $contact = "Ce message est envoyé depuis le site p5_blogPHP.test

            Nom : 
            $name

            Email : 
            $email

            Message : 
            $message";

            $sendMail = mail('edouard.liegeon@gmail.com', 'Message du site p5_blogphp.test', $contact);
            header('Location: /contact');
            exit;
        }
    }
}