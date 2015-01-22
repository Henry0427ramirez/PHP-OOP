<?php 
class Tree{
    public $name;
    public $Oak;
    public $Spruce;
    public $type;
    public $size;
    public $color;
    public $height;

    function __construct($name,$scientificname,$gender,$type,$size,$color,$height){
        
        $this->name = $name;
        $this->Oak = $Oak;
        $this->gender = $gender;
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
        $this->height = $color;
    }
    function getName(){
    return "This is " . $this->name . " and he's a " . $this->type;
    }
}
class OakTree extends Tree{
	function hello(){
		return$this->Oak;
	}
}

class SpruceTree extends Tree {
	function hello(){
	return $this->Spruce;	
	}
}

$Oak = new Tree("Oak","Tree","brown","boy","20");
print "Tree 1 is a " . $Oak->getName();
?>