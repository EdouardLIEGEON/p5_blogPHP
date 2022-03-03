<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;

class UsersController extends Controller
{

    /**
     * Connexion des utilisateurs
     *
     * @return void
     */
    public function login()
    {
        //On vérifie si le formulaire est complet
        if(Form::validate($_POST, ['name', 'password'])){
            //Le formulaire est complet
            //On va chercher dans la bdd l'utilisateur avec l'email entré
            $usersModel = new UsersModel;
            $userArray = $usersModel->findOneByName(strip_tags($_POST['name']));
            //Si l'utilisateur n'existe pas
            if(!$userArray){
                //On envoie un message de session
                $_SESSION['erreur'] = "Le nom et/ou le mot de passe est incorrect";
                header('Location: /users/login');
                exit;
            }
            //L'utilisateur existe
            $user = $usersModel->hydrate($userArray);

            //On vérifie que le mot de passe est correct
            if(password_verify($_POST['password'], $user->getPassword())){
                //Le mot de passe est bon
                //On crée la session
                $user->setSession();
                header('Location: /');
            }
        }

        $form = new Form;

        $form->debutForm()
                ->ajoutLabelFor('name', 'Nom :' )
                ->ajoutInput('name', 'name', ['class' => 'form-control', 'id' =>'name'])
                ->ajoutLabelFor('pass', 'Mot de passe :')
                ->ajoutInput('password', 'password', ['id'=> 'pass', 'class'=> 'form-control'])
                ->ajoutBouton('Me connecter', ['class' => 'btn btn-primary'])
                ->finForm();

        $this->render('users/login', ['loginForm'=> $form->create()]);

    }

    /**
     * Inscription des utilisateurs
     *
     * @return void
     */
    public function register()
    {
        //On vérifie si le formulaire est valide
        if(Form::validate($_POST, ['name', 'password'])){
            //Le formulaire est valide
            //On nettoie le Name
            $name = strip_tags(htmlspecialchars($_POST['name']));

            //On chiffre le mdp
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            //On hydrate l'utilisateur en bdd
            $user = new UsersModel;

            $user->setName($name)
                    ->setPassword($password);
            
                    //On stocke l'utilisateur
                    $user->create(); 
        }else{

            $errorValidateForm = "Veuillez renseigner un Nom et un Mot de passe svp";
        }
        $form = new Form;

        $form->debutForm()
                ->ajoutLabelFor('name', 'Nom :')
                ->ajoutInput('name', 'name', ['id'=> 'name', 'class'=> 'form-control'])
                ->ajoutLabelFor('pass', 'Mot de passe :')
                ->ajoutInput('password', 'password', ['id'=> 'password', 'class'=> 'form-control'])
                ->ajoutBouton('M\'inscrire', ['class'=> 'btn btn-primary'])
                ->finForm();

                $this->render('users/register', ['registerForm' => $form->create()]);
    }

    //Déconnecte l'utilisateur
    public function logout(){
        unset($_SESSION['user']);
        header('Location:' . $_SERVER['HTTP_REFERER']);
        exit;
    }

}