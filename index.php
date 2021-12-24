<?php 

require_once('controller/frontend.php');

if (isset($_GET['action'])) {
    $listPost = new Frontend();
    if ($_GET['action'] === 'listPosts') {
        $listPost->listPosts();
    }
    
    else if ($_GET['action'] === 'post') {
        $post = new Frontend();
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $post->post();
        }
        else {
            throw new Exception('aucun identifiant de post envoyé');
        }
    }

    else if ($_GET['action'] === 'addComment') {
        $addComment = new Frontend();
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['content'])) {
                $addComment->addComment($_GET['id'], $_POST['author'], $_POST['content']);
            }
            else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
        }
        else {
            throw new Exception('aucun identifiant de post envoyé');
        }
    }

    else if ($_GET['action'] === 'contact') {
        $contact = new Frontend();
        $contact->contact();
    }

    else if ($_GET['action'] === 'login') {
        $login = new Frontend();
        $login->login();
    }

    else if($_GET['action'] === 'connect') {
        $connect = new Frontend();
        $connect->connect($_POST['name'], $_POST['password']);
    }

    else if ($_GET['action'] === 'registration') {
        $registration = new Frontend();
        $registration->registration();
        }

    else if ($_GET['action'] === 'addUser') {
        $addUser = new Frontend();
        $addUser->addUser($_POST['name'], $_POST['password']);
    }

    else if ($_GET['action'] === 'admin') {
        $admin = new Frontend();
        $admin->admin();
    }
}

else {
    $home = new Frontend();
    $home->home();
}
