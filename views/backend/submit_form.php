<?php
class User{

    public function verif_data($name){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $name)){
           
        }
        else{
            echo "Format invalide";
        }
        $name = $_POST['name'];
    }
    public function verif_password($password){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $password)){
        }
        else{ echo "Format invalide";
        }
        $password = $_POST['password'];
    }
}
