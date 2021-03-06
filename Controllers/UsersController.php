<?php
namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;
use App\Globals\Globals;

class UsersController extends Controller
{
    /**
     * Connexion des utilisateurs
     *
     * @return void
     */
    public function login()
    {
        $globals = new Globals;
        $post_global = $globals->getPOST();

        //On vérifie si le formulaire est complet
        if (Form::validate($post_global, ['name', 'password'])) {
            //Le formulaire est complet
            //On va chercher dans la bdd l'utilisateur avec l'email entré
            $usersModel = new UsersModel;
            $userArray = $usersModel->findOneByName(strip_tags($post_global['name']));
            //Si l'utilisateur n'existe pas
            if (!$userArray) {
                //On envoie un message de session
                $_SESSION['erreur'] = 'Le nom et/ou le mot de passe est incorrect';
                header('Location: /users/login');
            }
            //L'utilisateur existe
            $user = $usersModel->hydrate($userArray);

            //On vérifie que le mot de passe est correct
            if (password_verify($post_global['password'], $user->getPassword())) {
                //Le mot de passe est bon
                //On crée la session
                $user->setSession();
                header('Location: /users/success');

            } else {

                $_SESSION['erreur'] = 'Le nom et/ou le mot de passe est incorrect';
                header('Location: /users/login');   
                exit;       
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
    public function success()
    {
        $this->render('users/success');

    }
    public function success_register()
    {
        $this->render('users/success_register');

    }

    /**
     * Inscription des utilisateurs
     *
     * @return void
     */
    public function register()
    {
        $globals = new Globals;
        $post_global = $globals->getPOST();

        //On vérifie si le formulaire est valide
        if (Form::validate($post_global, ['name', 'password'])) {
            //Le formulaire est valide
            //On nettoie le Name
            $name = strip_tags(htmlspecialchars($post_global['name']));

            //On chiffre le mdp
            $password = password_hash($post_global['password'], PASSWORD_ARGON2I);

            //On hydrate l'utilisateur en bdd
            $user = new UsersModel;

            $user->setName($name)
                ->setPassword($password);
            
                    //On stocke l'utilisateur
                    $user->create(); 
                    header('Location: /users/success_register');
        } else {

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
    public function logout()
    {
        $globals = new Globals;
        $server = $globals->getSERVER();

        unset($_SESSION['user']);
        header('Location:' . $server['HTTP_REFERER']);
    }

}