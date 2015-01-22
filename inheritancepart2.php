<?php

class Child {
	public $firstname;
	public $lastname;
	public $gender;
	public $weight;
	public $height;

	function __construct($firstname,$lastname,$gender,$weight,$height) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->height = $height;
	}

	function getName(){
		return "This is " . $this->firstname . $this->lastname . " and its a " . $this->gender. ".";
	}
}
class Boy extends Child {
	function __construct($firstname,$lastname,$gender,$weight,$height)
	parent:: __construct($firstname,$lastname,$gender,$weight,$height);
	$this->weight = $weight;
}
function greet(){
	return $this->gender;
}

class Girl extends Child {
	function __construct($firstname,$lastname,$gender,$weight,$height);
	parent::__construct($firstname,$lastname,$gender,$weight,$height);
	this->gender =$gender;
}

$Boy = new Boy("Boy","nice","brown","male", 15 true);
print "Child 1 is a " . $Boy->getName();
