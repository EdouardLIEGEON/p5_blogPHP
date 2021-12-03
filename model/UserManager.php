<?php

require_once("Manager.php");

class UserManager extends Manager{

    public function createUser($name, $password)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('INSERT INTO users(name, password) VALUES(?,?, NOW())');
        $affectedLines2 = $user->execute(array($name, $password));
        
    }
    public function connectUser()
   {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM users WHERE name=? AND password=?", array($name,$password));
        $req = $req->fetch();
        session_start();
    }
}

