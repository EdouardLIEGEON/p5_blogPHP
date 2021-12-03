<?php

require_once('C:/wamp64/www/p5_blogPHP/model/PostManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/CommentManager.php');
require_once('C:/wamp64/www/p5_blogPHP/model/UserManager.php');


    function home()
    {
        require_once('views/frontend/home.php');
    }
    function listPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();
        require_once('views/frontend/projects.php');
    }

    function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require_once('views/frontend/single.php');
    }

    function addComment($postId, $author, $content, $userId)
    {
        $commentManager = new CommentManager();
        $affectedLines = $commentManager->postComment($postId, $author, $content, $userId);
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }

    function contact()
    {
        require_once('views/frontend/contact.php');
    }

    function login()
    {
                $name = $_POST['name'];
                $password = $_POST['password'];

                $userManager = new UserManager();
                $users = $userManager->connectUser($name, $password);
                session_start();

        require_once('views/frontend/login.php');

    }

    function deconnexion()
    {
        session_destroy();
    }

    function registration()
    {
        if (isset($_POST['submit'])) {

            if (empty($_POST['name']) || empty($_POST['password'])) {
        
                $error = "Veuillez remplir tous les champs";
        
            }
            else {
        
                $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                $password = htmlspecialchars(stripslashes(trim($_POST['password'])));

                $userManager = new UserManager();
                $affectedLines2 = $userManager->createUser($name, $password);
                if ($affectedLines2 === false) {
                    throw new Exception("Impossible d\'ajouter l'utilisateur !");
                }

                else {
                    header('Location: index.php?action=registration');
                }

                $success = "Vous êtes bien enregistré ! Vous pouvez vous connecter";
        
            }
        }

        require_once('views/frontend/registration.php');

    }

    function admin()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        require_once('views/backend/admin.php');
    }
