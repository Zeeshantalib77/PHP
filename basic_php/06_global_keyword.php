<?php
$x = 5;
$y = 10;

function myTest() 
{
	global $x, $y;
	$y = $x + $y;
} 

myTest();  // function calling
echo $y; // output the new value for variable $y
?>