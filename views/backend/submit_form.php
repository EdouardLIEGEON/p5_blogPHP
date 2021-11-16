<?php

$name = $_POST['name'];
$password = $_POST['password'];

function verif_data($name, $password){
    $name = trim($name);
    $name = htmlspecialchars($name);
    $name = stripslashes($name);
    $password = trim($password);
    $password = htmlspecialchars($password);
    $password = stripslashes($password);
}


if (!isset($_POST['name']) || !isset($_POST['password'])){
    echo "Entrez un Pseudo d'utilisateur et/ou un mot de passe svp";
    return;
}
elseif(isset($_POST['name']) || isset($_POST['password'])){
    verif_data($name, $password);
    return preg_match([^A-Za-z0-9]);
}




?>