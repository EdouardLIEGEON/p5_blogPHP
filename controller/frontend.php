<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');
/*require_once('model/UserManager.php'); */

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
    require('views/frontend/login.php');

    function verif_data($name)
        {
            if (preg_match("#^[ a-z0-9A-Z\-]+$#", $name) AND trim($name) AND htmlspecialchars($name) AND stripslashes($name)) {
              $name->ConnectUser();
            }
            else {
                echo "Format invalide";
            }
            
        }
        function verif_password($password)
        {
            if (preg_match("#^[ a-z0-9A-Z\-]+$#", $password) || trim($password) || htmlspecialchars($password) || stripslashes($password)) {
                $password->ConnectUser();
            }
            else{ echo "Format invalide";
            }
            
        }
}
function register()
{
    require('views/frontend/register.php');

        function verif_data($name)
        {
            if (preg_match("#^[ a-z0-9A-Z\-]+$#", $name) AND trim($name) AND htmlspecialchars($name) AND stripslashes($name)) {
              $name->CreateUser();
            }
            else {
                echo "Format invalide";
            }
            
        }
        function verif_password($password)
        {
            if (preg_match("#^[ a-z0-9A-Z\-]+$#", $password) || trim($password) || htmlspecialchars($password) || stripslashes($password)) {
                $password->CreateUser();
            }
            else { echo "Format invalide";
            }
            
        }
}
function admin()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    require('views/backend/admin.php');
}