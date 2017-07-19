<?php
$a = 12;
$b = 4;

$c = $a + $b; //addition

$d = $a - $b; // subtraction

$e = $d / $b; // division

$f = $e * $b; // multiplication

$g = $a % 7; // remainder

$h = ++$b;

$i = --$a;

$a += 4; // $a = $a + 4


//echo $a;


$rainy = true;

$sunny = !$rainy;

$person1 = [
	'name' => 'Pete',
	'role' => 'maestro',
	'height' => 1.82,
	'age' => 29
];

$person2 = [
	'name' => 'Pete',
	'role' => 'estudiante',
	'height' => 5.5,
	'age' => 90
];

$same = (($person1['age'] < $person2['age']) && ($person1['height'] > $person2['height']));

$higherName = $person1['name'] == $person2['name'];

echo var_dump($higherName);

class Foo {
	protected $_value;

	function __construct() {
		$this->_value = 1;
	}

	public static function getsomething() {
		return $this->_value * 5;
	}
}

echo Foo::getsomething();






///////////
