<?php

session_start();
require_once("Manager.php");

class UserManager extends Manager{

    public function createUser(){

        if(isset($_SESSION['id'])){
            header('Location: views/frontend/home.php');
            exit;
        }

        if(!empty($_POST)){
            extract($_POST);
            $valid = true;

            if(isset($_POST['register'])){
                $name = htmlentities(trim($name));
                $password = trim($password);

                if(empty($name)){
                    $valid = false;
                    $error_name = "Le nom doit être rempli";
                }
                if(empty($password)){
                    $valid = false;
                    $error_password = "Le mot de passe doit être rempli";
                }
            }
            if($valid){
                $password = crypt($password, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
                $db->insert("INSERT INTO users(name, password) VALUES(?,?)", array($name, $password));
                header('Location: views/frontend/home.php');
                exit;
            }
        }    
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

