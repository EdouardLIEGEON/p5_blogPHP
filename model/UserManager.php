<?php

require_once("Manager.php");

class UserManager extends Manager{

    public function createUser($name, $password)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('INSERT INTO users(name, password) VALUES(?,?, NOW())');
        
    }
    public function connectUser($name, $password)
   {
        if (isset($_SESSION['id'])) {
            header: ('Location: views/frontend/home.php');
            exit;
        } 
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM users WHERE name=? AND password=?", array($name, crypt($password, "$6$rounds=5000$macleapersonnaliseretagardersecret$")));
        $req = $req->fetch();
        session_start();
    }
}

