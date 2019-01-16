<?php
function myTest() 
{
	static $x = 0;
	echo "value of x = ".$x;
	echo "<br>";
	$x++;
}

myTest();
myTest();
myTest();
?>