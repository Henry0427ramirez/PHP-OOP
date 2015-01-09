<?php
// is_array to tell you whter its an array or not.
if (is_array( "hello")){
   echo "its an array!";
}
else{
   echo "it is not an array!";
}
var_dump(is_array('XYZ'));
var_dump(is_array('8008'));
var_dump(is_array(123));
var_dump(is_array(true));




if (is_object("Hi, I'm an object")){
	echo "Its an object";
}
else{
	echo "I'm not an object";
}
var_dump(is_object('XYV'));
var_dump(is_object('8008'));
var_dump(is_object(123));
var_dump(is_object(false));




is_string(("This is a string")){
    echo "the string is working";
}
else{
	echo "The string is broken";
}
var_dump(is_string('XYZ'));
var_dump(is_string('8008'));
var_dump(is_string(123));
var_dump(is_string(false));
//var_dump is used to throw code in.
?>
