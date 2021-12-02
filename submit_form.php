<?php

if (isset($_POST['submit']))
{
	$name = htmlspecialchars(trim($_POST['name']));
	$password = htmlspecialchars(trim($_POST['password']));

	if (empty($password) || empty($name))
	{
		$error = "Tous les champs n'ont pas été remplis";
	}
	else
	{
		header ("location: successRegistration.php");
		$dataForm = array($name, $password);
	
	}
	
}

if (isset($_POST['name']) && isset($_POST['password'])) {

	foreach ($users as $user) {

		if (
			$user['name'] === $_POST['name'] &&
			$user['password'] === $_POST['password']
		) {

			$_SESSION['LOGGED_USER'] = $user['name'];
		} else {
			$errorMessage = sprintf("Les informations n'existent pas",
			$_POST['name'],
			$_POST['password']
		);
		}
	}
}


