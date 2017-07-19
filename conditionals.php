<?php

$greeting = "Hello";

$person = [
	'name' => 'Pete',
	'role' => 'maestro',
	'height' => 1.82,
	'age' => 29
];

foreach($person as $key => $value) {
	if ($key=="name") {
		$greeting .= " ".$value;
	}
}

//echo $greeting;

$inputUsername = "Harry";
$inputPassword = "12345";
$userRole = "someone"; //admin, member, editor, guest, superadmin

/*
if($userRole=="admin") {
	//redirect to dashboard
	echo "You're in admin!";
} elseif ($userRole=="member") {
	// redirect to profile
	echo "Welcome member!";
} else {
	echo "We don't know you. Get out!";
}
*/

switch($userRole) {
	case "admin":
		//redirect to admin
		echo "You're an admin";
		break;
	case "member":
		//handle member
		echo "You're a member";
		break;
	case "editor":
		// handle editor
		echo "You're an editor";
		break;
	case "guest":
		// treat guest
		echo "You're a guest";
		break;
	default:
		echo "Who are you?";
}

echo "<hr>";

$currentHour = 8;

$greeting = "Good";

if($currentHour < 12) {
	$timeOfDay = " morning";
} else {
	$timeOfDay = " evening";
}

//$timeOfDay = ($currentHour < 12) ? " morning" : " evening";

echo $greeting.$timeOfDay;






###
