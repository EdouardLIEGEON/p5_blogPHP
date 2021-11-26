<?php

if (isset($_POST['submit']))
{
	$Password = htmlspecialchars(trim($_POST['password']));
	$Name = htmlspecialchars(trim($_POST['name']));
}
