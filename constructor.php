<?php 
  class Giraffe {
  	public $age;
  	public $size;
  	public $name;

  	       function__construct($age,$size,$name){
  	       	$this->age = $age;
  	       	$this->size = $size;
  	       	$this->name = $name;
  	       }

  	       function myAge(){
  	       	return"($this->age)";
  	       }
  }
$Giraffe1 = new Giraffe("20","10ft","bob");
print Giraffe1:{$Giraffe1->myAge()}\n;


?>