<?php

require_once('C:/wamp64/www/p5_blogPHP/model/PostManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/CommentManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/UserManager.php');

class Frontend{

    public function home()
    {
        require_once('views/frontend/home.php');
    }
    public function listPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();
        require_once('views/frontend/projects.php');
    }

    public function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require_once('views/frontend/single.php');
    }

    public function addComment($postId, $author, $content)
    {
        $commentManager = new CommentManager();
        $affectedLines = $commentManager->postComment($postId, $author, $content);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }

    public function contact()
    {
        require_once('views/frontend/contact.php');
    }

    public function login()
    {    
        require_once('views/frontend/login.php');
    }
    public function connect($name, $password)
    {
        $userManager = new UserManager();
        $user = $userManager->connectUser($name, $password);

        if (isset($name) && isset($password)) {
            foreach($user as $_POST){
                if(
                $user['name'] === $name &&
                $user['password'] === $password
            ){
                $_SESSION['LOGGED_USER'] = $user['name'];
                header('Location: index.php?action=login');
            } else {
                throw new Exception('Les informations envoyées ne permettent pas de vous identifier');
            }
            }
        }
    }

    public function deconnexion()
    {
        session_destroy();
    }

    public function registration()
    {
        require_once('views/frontend/registration.php');    
    }
    public function addUser($name, $password)
    {
        if (!empty($name) && !empty($password)) {

            $name = htmlspecialchars(trim(stripslashes($name)));
            $password = htmlspecialchars(trim(stripslashes($password)));

            $userManager = new UserManager();     
            $affectedLines = $userManager->createUser($name, $password);

            if ($affectedLines === false) {
                throw new Exception('Impossible d\'ajouter l\'utilisateur !');
                }
                else {
                    header('Location: index.php?action=registration');
                }
            }
            else {
                throw new Exception('Les champs doivent être remplis');
            } 
    }

    public function admin()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        require_once('views/backend/admin.php');
    }
}