<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=blogphp;charset=utf8', 'root', '');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM projets');
while ($donnees = $reponse->fetch()){
?>
