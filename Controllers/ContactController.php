<?php
namespace App\Controllers;
use App\Core\Form;

class ContactController extends Controller
{
    public function index(){
        //On créé le formulaire
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

                //On envoie sur la vue 
                $this->render('contact/index', ['form' => $form->create()]);

        //On vérifie si le formulaire est complet
        if(Form::validate($_POST, ['name', 'email', 'message'])){
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $message = strip_tags($_POST['message']);
            $contact = "Ce message est envoyé depuis le site p5_blogPHP.test". "\r\n".
            "Nom : $name". "\r\n".
            "Email : $email". "\r\n".
            "Message : $message";

            // if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email) && preg_match("/^[a-zA-Z]/", $name, $message)){
                
            //On envoie le contenu du formulaire sur l'adresse mail
            $sendMail = mail('edouard.liegeon@gmail.com', 'Message du site p5_blogphp.test', $contact);
        }
    }
}