<?php

require('C:/wamp64/www/p5_blogPHP/model/PostManager.php');
require('C:/wamp64/www/p5_blogPHP/model/CommentManager.php');
require('C:/wamp64/www/p5_blogPHP/model/UserManager.php');

    function home(){
        require('views/frontend/home.php');
    }
    function listPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();
        require('views/frontend/projects.php');
    }

    function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require('views/frontend/single.php');
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
        require('views/frontend/contact.php');
    }

    function login()
    {
        require_once('C:\wamp64\www\p5_blogPHP\submit_form.php');


        require('views/frontend/login.php');

    }
    function deconnexion(){
        session_destroy();
    }

    function registration()
    {
        require('C:\wamp64\www\p5_blogPHP\submit_form.php');
        
        $dataForm = array($name, $password);

        require('views/frontend/registration.php');

    }

    function admin()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        require('views/backend/admin.php');
    }
