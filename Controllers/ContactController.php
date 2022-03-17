<?php
namespace App\Controllers;
use App\Core\Form;
use App\Globals\Globals;


class ContactController extends Controller
{

    public function index(){
        //On créé le formulaire
        $form = new Form;
        $globals = new Globals;
        $post_global = $globals->getPOST();

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
        if(Form::validate($post_global, ['name', 'email', 'message'])){
            $name = strip_tags($post_global['name']);
            $email = strip_tags($post_global['email']);
            $message = strip_tags($post_global['message']);
            $contact = "Ce message est envoyé depuis le site p5_blogPHP.test". "\r\n".
            "Nom : $name". "\r\n".
            "Email : $email". "\r\n".
            "Message : $message";
                
            //On envoie le contenu du formulaire sur l'adresse mail
            $sendMail = mail('edouard.liegeon@gmail.com', 'Message du site p5_blogphp.test', $contact);
        }
    }
}