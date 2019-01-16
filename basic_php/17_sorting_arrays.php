<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // sort arrays in ascending order
print_r($cars); // print_r used to show array as an output

echo"<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // ascending order
print_r($numbers);

echo"<br>";

rsort($cars); // sort arrays in descending order
print_r($cars);

echo "<br>";

$age = array("Raza"=>"35", "Bilal"=>"37", "Ali"=>"43");
asort($age); // sort associative arrays in ascending order, according to the value
print_r($age);

/* asort() associative array in ascending order associative array in ascending order
ksort() sorts an associative array in ascending order, according to the key
arsort() sorts an associative array in descending order, according to the value
krsort() sorts an associative array in descending order, according to the key
 */

?>