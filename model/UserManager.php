<?php

require_once("Manager.php");
class UserManager extends Manager{

    public function createUser($name, $password)
    {
        $db = $this->dbConnect();
        $users = $db->prepare('INSERT INTO users(name, password) VALUES(?,?, NOW())');
        $affectedLines = $users->execute(array($name, $password));

        return $affectedLines;
    }
    
    public function connectUser()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM users');
        return $req;
    }
}




