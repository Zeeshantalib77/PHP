<?php
/* A function is a block of statements that can be used repeatedly in a program */
function show()
{
	echo "I am function";
}
show(); // function calling

echo "<br>";

// function parameter
function Name($my_name)
{
	echo "$my_name <br>";
}
Name("ali");
Name("hamza");

echo "<br>";

// function multiple parameters
function Full_Name($first_name,$last_name)
{
	echo "My full name is $first_name $last_name";
}
Full_Name("Zeeshan","Talib");

echo "<br>";

// PHP Default argument
function show_number($number=10)
{
	echo "value of Number = $number <br>";
}
show_number(5);
show_number(); // will use default value

// PHP returning values
function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
echo "<br> addition = ". sum(5, 5) . "<br>";

?>