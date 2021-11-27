<?php

if (isset($_POST['submit']))
{
	$name = htmlspecialchars(trim($_POST['name']));
	$password = htmlspecialchars(trim($_POST['password']));

	if (empty($password) || empty($name))
	{
		echo "Tous les champs n'ont pas été remplis";
	}
	else
	{
		$dataForm = array($name, $password);
	
	}
	
}

