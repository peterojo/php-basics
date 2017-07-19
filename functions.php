<?php

// define a function
function sayHi ($person) {
	$message = "Hi there {$person}!";

	return $message;
}

function getTotal ($firstNumber, $secondNumber, $thirdNumber) {
	return $firstNumber + $secondNumber + $thirdNumber;
}

function getFullSentence($words) {
	$sentence = " ";

	foreach($words as $word) {
		$sentence .= $word." ";
	}

	return trim($sentence);
}

// calling a function
//sayHi("Kelvin");

$total = getTotal(3, 4, 5);

$funcMessage = sayHi("Peter");

$fullSentence = getFullSentence(['My', 'name', 'is', 'Khan']);

var_dump($fullSentence);
