<?php

$a=5;
$b=10.5;
$c=true;
$d = null;
$first_name="Ali";
$last_name="Hamza";
$full_name="Ali Hamza";
$cars = array("Suzuki","BMW","Toyota"); // array

echo $full_name; echo "<br>";
echo "My First Name: ". $first_name ." and My Last Name: ". $last_name; echo "<br>";
echo "My Full Name is : ".$full_name; echo "<br>";
echo "My Full Name is : $full_name <br>";
echo "<h2>" . $full_name . "</h2> <br>";

echo "<br>";

$x=10;
$y=10;
echo $x+$y;

echo "<br>";

var_dump($a); // PHP var_dump() function returns the data type and value
var_dump($cars);

/*
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
Variable names are case-sensitive ($age and $AGE are two different variables)
*/

/*
PHP is a Loosely Typed Language:
In the example above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically converts the variable to the correct data type, depending on its value.
In other languages such as C, C++, and Java, the programmer must declare the name and type of the variable before using it.
*/

?>

