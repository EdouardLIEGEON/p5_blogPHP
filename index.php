
<?php 
require('controller/frontend.php');

if (isset($_GET['action'])){
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post'){
        if (isset($_GET['id']) && $_GET['id'] > 0){
            post();
        }
        else {
            throw new Exception('aucun identifiant de post envoyé');
        }
    }
    elseif($_GET['action'] == 'addComment'){
        if(isset($_GET['id']) && $_GET['id'] > 0){
            if(!empty($_POST['author']) && !empty($_POST['content'])){
                addComment($_GET['id'], $_POST['author'], $_POST['content']);
            }
            else{
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else{
            throw new Exception('aucun identifiant de post envoyé');
        }
    }
    elseif($_GET['action'] == 'contact'){
        contact();
    }
    elseif($_GET['action'] == 'login'){
        login();
    }
    elseif($_GET['action'] == 'register'){
        register();
    }
    elseif($_GET['action'] == 'admin'){
        admin();
    }
    elseif($_GET('action') == 'deconnexion'){
        deleteSession();
    }
}
else{
    home();
}
