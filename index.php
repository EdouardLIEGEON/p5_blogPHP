<?php 

require_once('controller/frontend.php');

if (isset($_GET['action'])) {
    $listPost = new Controller();
    if ($_GET['action'] === 'listPosts') {
        $listPost->listPosts();
    }
    
    else if ($_GET['action'] === 'post') {
        $post = new Controller();
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $post->post();
        }
        else {
            throw new Exception('aucun identifiant de post envoyé');
        }
    }

    else if ($_GET['action'] === 'addComment') {
        $addComment = new Controller();
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['content'])) {
                $addComment->addComment($_GET['id'], $_POST['author'], $_POST['content']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            throw new Exception('aucun identifiant de post envoyé');
        }
    }

    else if ($_GET['action'] === 'contact') {
        $contact = new Controller();
        $contact->contact();
    }

    else if ($_GET['action'] === 'login') {
        $login = new Controller();
        $login->login();
    }

    else if ($_GET['action'] === 'registration') {
        $registration = new Controller();
        $registration->registration($_POST['name'], $_POST['password']);
        }

    else if ($_GET['action'] === 'admin') {
        $admin = new Controller();
        $admin->admin();
    }
}
else {
    $home = new Controller();
    $home->home();
}
