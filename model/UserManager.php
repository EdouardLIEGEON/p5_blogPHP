<?php

session_start();
require_once("Manager.php");

class UserManager extends Manager{

    public function createUser(){

    }
   /* public function connectUser{
        if(isset($_SESSION['id'])){
            header: ('Location: views/frontend/home.php');
            exit;
        }
        if(!empty($_POST)){
            extract($_POST);
            $valid = true;

            if(isset($_POST['login'])){
                $name = htmlentities(trim($name));
                $password = trim($password);

                if(empty($name)){
                    $valid = false;
                    $error_name = "Renseignez votre pseudo";
                }
                if(empty($password)){
                    $valid = false;
                    $error_password = "Renseignez votre mot de passe";
                }
                $req = $db->query("SELECT* FROM users WHERE name=? AND password=?", array($name, crypt($password, "$6$rounds=5000$macleapersonnaliseretagardersecret$")));
                $req = $req->fetch();
            }
        }
    }*/
}

