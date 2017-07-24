<?php

echo "Processing...<br>";

//var_dump($_POST);exit;
//$sql = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password='".$_POST['password']."'";
// SELECT * FROM users WHERE email = 'peter-ojo@hotmail.com' AND password='\' OR '1'='1' '';

$name = $_POST['name']; // "Peter's Money"
$email = $_POST['email'];
$password = $_POST['password'];

function getFullStatement ($name, $email, $password) {
	$statement = "Welcome ".$name."! Your email is ".$email." and your password\" is shhhhh... (whispers) ".$password;

	return $statement;
}

echo getFullStatement($name, $email, $password);
