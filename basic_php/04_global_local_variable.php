<?php

$x = 5; // global scope variable

function myTest() 
{
    // using x inside this function will generate an error
	echo "Variable x inside function is: $x <br>";

	$y=10; // local scope variable
	echo "Variable y inside function is: $y <br>";
} 
myTest(); // function calling

echo "Variable x outside function is: $x <br>";

// using y outside this function will generate an error
echo "Variable y outside function is: $y <br>";

?>

