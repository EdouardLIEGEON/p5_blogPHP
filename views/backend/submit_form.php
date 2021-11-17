<?php
class User{
    private $name = $_POST['name'];
    private $password = $_POST['password'];

    public function verif_data($name){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $name)){
            $this = trim($name);
            $this = htmlspecialchars($name);
            $this = stripslashes($name);
        }
        else{
            echo "Format invalide";
        }
    
    }
    public function verif_password($password){
        if(preg_match("#^[ a-z0-9A-Z\-]+$#", $password)){
            $this = trim($password);
            $this = htmlspecialchars($password);
            $this = stripslashes($password);
        }
        else{ echo "Format invalide";
        }
    }


    
}





?>