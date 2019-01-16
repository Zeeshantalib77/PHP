<?php

// An array stores multiple values in one single variable

//Indexed arrays - Arrays with a numeric index
$cars = array("Suzuki", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";
echo "Total elements in array = ". count($cars);
// count() function is used to count total number of elements in an array
echo "<br>";
/* also this way
$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";
*/

$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++)
{
    echo $cars[$x];
    echo "<br>";
}

//Associative arrays - Arrays with named keys

$age = array("ali"=>"35", "ahamd"=>"37", "raza"=>"43");
echo "Ali is " . $age['ali'] . " years old. <br>";
/*
$age['ali'] = "35";
$age['ahmad'] = "37";
$age['raza'] = "43";
*/

foreach($age as $x => $x_value)
 {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}

?>