<?php

class Manager{
    
protected function dbConnect()
    {
   
        $db = new PDO('mysql:host=localhost;dbname=blogphp;charset=utf8', 'root', '');
        return $db;
    }
}