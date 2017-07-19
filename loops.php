<?php

$i = 1;

while($i<10) {
	//echo $i;
	$i++;
}

$db_codes = [
	'etyubnjnkjm',
	'tubry6u5rey',
	'v65uvryjrbry',
	'v6y4yrfrbuu',
	'6yub67iyruyj'
];

$db_more_codes = [
	'etyubnjnkjm',
	'tubry6u5rey',
	'v65uvryjrbry',
	'v6y4yrfrbuu',
	'64ytyfytfyrth',
	'86iruyghghgh',
	'75ugryuryyrg6',
	'6yub67iyruyj'
];

function generateUniqueCode () {
	global $db_more_codes;

	return $db_more_codes[rand(0,7)];
}

function checkExists ($code) {
	global $db_codes;
	if(in_array($code, $db_codes)) {
		return true;
	} else {
		return false;
	}
}

/*
while($exists = checkExists($code = generateUniqueCode())) {
	echo $code. "<br>";
}
*/

do {
	$code = generateUniqueCode();
	echo "tried.<br>";
} while (checkExists($code));

echo $code;
