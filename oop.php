<?php

class Person {
	public $name;
	public $age;

	function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	function greet() {
		echo "Hi! My name is ".$this->name;
	}

	function grow() {
		$this->age++;
	}

	function growBy($years) {
		$this->age += $years;
	}
}

$me = new Person("Peter", 16);

$abe = new Person("Abraham", 45);

$abe->greet();
