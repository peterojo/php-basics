<?php

echo "Processing...<br>";

//var_dump($_POST);exit;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

function getFullStatement ($name, $email, $password) {
	$statement = "Welcome ".$name."! Your email is ".$email." and your password is shhhhh... (whispers) ".$password;

	return $statement;
}

echo getFullStatement($name, $email, $password);
