<?php

if (!isset($_POST['name'])){
    echo "Entrez un Pseudo d'utilisateur svp";
    return;
}
if(!isset($_POST['password'])){
    echo "Entrez un mot de passe svp";
    return;
}

$name = $_POST['name'];
$password = $_POST['password'];

?>