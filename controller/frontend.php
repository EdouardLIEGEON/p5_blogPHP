<?php

require_once('C:/wamp64/www/p5_blogPHP/model/PostManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/CommentManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/UserManager.php');

class Controller{

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
        
        if (isset($_POST['submit'])) {

            if (empty($_POST['name']) || empty($_POST['password'])) {
        
                $error = "Veuillez remplir tous les champs";
        
            }
            
            else {
        
                $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                $password = htmlspecialchars(stripslashes(trim($_POST['password'])));

                
            }
            if (isset($_POST['name']) &&  isset($_POST['password'])) {
                if (
                    $name === $_POST['name'] &&
                    $password === $_POST['password']
                ) {
                   $_SESSION['LOGGED_USER'] = $name;
                }
            }
        }
        require_once('views/frontend/login.php');

    }

    public function deconnexion()
    {
        session_destroy();
    }

    public function registration($name, $password)
    {
        require_once('views/frontend/registration.php');
        $userManager = new UserManager();     
        $affectedLines = $userManager->createUser($name, $password);
    }

    public function admin()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        require_once('views/backend/admin.php');
    }
}