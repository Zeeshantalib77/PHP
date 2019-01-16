<?php
class MyClass{
	Public function show() 
	{
		return "This is my function";
	}
	// __call() method with two args
	Public function __call($method,$arg)
	{
		//echo $method,'<br>';
		print_r($arg);
	}
}

$object1=new MyClass; 
$object1->bar("arg1","arg2");

/*
=> Usually it means the ability to declare two methods with different sets of parameters but same names

All overloading methods are invoked when accessing variable or method that is not declared or is inaccessible
__set($index, $value) – when writing (property overloading)
__get ($name) –when reading (property overloading)
__call ($name, $arguments) - when calling a method


*/
?>