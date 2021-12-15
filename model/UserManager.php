<?php

require_once("Manager.php");
class UserManager extends Manager{

    public function createUser($name, $password)
    {

        $db = $this->dbConnect();
        $users = $db->prepare('INSERT INTO users(name, password, role) VALUES(?,?, contributeur, NOW())');
        $affectedLines2 = $users->execute(array($name, $password));
        return $affectedLines2;

    }
    
    public function connectUser()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM users');
        return $req;
    }
}

