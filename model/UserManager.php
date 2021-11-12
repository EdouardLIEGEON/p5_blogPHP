<?php


require_once("Manager.php");

class UserManager extends Manager{

    public function getUser()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM users');
        return $req;
    }
    public function verifUser(){
        $captureName = $_POST['name'];
        $capturePassword = $_POST['password'];
        $req = $db->query("SELECT * FROM users WHERE name = '$captureName' AND password = '$capturePassword'")->fetch();
        $user_name = $req['name'];
    }

    public function getSession(){
        session_start();
        if($_SESSION != NULL){ 
            $user_name = $_SESSION['name'];
            echo $_SESSION['name'];
            echo require('views/frontend/register.php');
    }
    public function deleteSession{
        if($_GET['action'] == 'deleteSession'){
            unset($_SESSION['name']);
            echo require('views/frontend/register.php');
        }
    }

    public function insertUser()
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $User_data = $pdo->query("SELECT name FROM users WHERE name = '$name'")->fetch();

    if($User_data == NULL){
        $db = $this->dbConnect();
        $users = $db->prepare('INSERT INTO users(name, password) VALUES(?,?, NOW())');
        $affectedLines2 = $users->execute(array($name, $password));

        return $affectedLines2;
    }
}

