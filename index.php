<?php

$name1 = "Peter Ojo";
$colour1 = "blue";
$age = 29;
$married = false;
$accountBalance = 25.75;

define('FOOD', 'Rice');

echo FOOD;

// indexed array
$weekdays = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

//echo $weekdays[6];
//echo count($weekdays);

// associative arrays have key-value pairs
$mealsForTheWeek = [
	'Sunday' => 'Jollof Rice and Dodo',
	'Monday' => 'Beans and Akamu',
	'Tuesday' => 'Amala and Gbegiri',
	'Wednesday' => 'Moin moin',
	'Thursday' => 'Indomie',
	'Friday' => 'Bread and Tea',
	'Saturday' => 'Fasting'
];

echo "<hr>";
//echo $mealsForTheWeek['Tuesday'];

// looping through an array
/*
for( $i=1; $i<=10; $i++ ) {
	echo $i."<br>";
}
*/

/*
for($j=0; $j < count($weekdays); $j++) {
	echo $weekdays[$j] . "<br>";
}
*/

foreach($weekdays as $day) {
	echo $day. "<br>";
}

echo "<hr>";

foreach($mealsForTheWeek as $key => $value) {
	echo $key . ": " . $value . "<br>";
}







##############
