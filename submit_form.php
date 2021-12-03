<?php

if (isset($_POST['submit'])) {

    if (empty($_POST['name']) || empty($_POST['password'])) {

        $error = "Veuillez remplir tous les champs";

    }
    else {

        $name = htmlspecialchars(trim($_POST['name']));
        $password = htmlspecialchars(trim($_POST['password']));

    }
}


