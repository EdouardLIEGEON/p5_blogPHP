<?php

require_once("Manager.php");

class UserManager extends Manager{

    public function createUser($name, $password)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('INSERT INTO users(name, password, role) VALUES(?,?,contributeur NOW())');
        $affectedLines2 = $user->execute(array($name, $password));
        
        return $affectedLines2;
        
    }
    public function connectUser($name, $password)
    {
        $db = $this->dbConnect();
            $users = $db->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
            $users->execute(array($name, $password));
            return $users;
    }
}

