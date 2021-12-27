<?php

require_once("Manager.php");
class UserManager extends Manager{

    public function createUser($name, $password)
    {
        $db = $this->dbConnect();
        $users = $db->prepare('INSERT INTO users(name, password) VALUES(?,?, NOW())');
        $affectedLines2 = $users->execute(array($name, $password));

        return $affectedLines2;
    }
    
    public function connectUser($name, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT name, password FROM users');
        $req->execute(array($name, $password));
        $user = $req->fetch();

        return $user;
    }
}




