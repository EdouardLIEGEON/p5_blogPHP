<?php
class User{

    public function verif_data($name){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $name) || trim($name) || htmlspecialchars($name) || stripslashes($name)){
           
        }
        else{
            echo "Format invalide";
        }
        
    }
    public function verif_password($password){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $password) || trim($password) || htmlspecialchars($password) || stripslashes($password)){
        }
        else{ echo "Format invalide";
        }
        
    }
}
