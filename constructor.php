<?php 
  class Giraffe {
  	public $age;
  	public $size;
  	public $name;

  	 function __construct($age,$size,$name){
  	 $this->age = $age;
  	 $this->size = $size;
  	 $this->name = $name;
  	 }

  	 function myAge(){
  	 return"($this->age)";
     }
     function myName(){
     return "($this->name)";
     }
  }
$Giraffe1 = new Giraffe("20","10ft","bob");
print "Giraffe1:{$Giraffe1->myName()}\n";

?>