<?php 

// for loops execute a block of code a specified number of times
for ($c=1;$c<=5;$c++)
{
    echo "Value of c = $c <br>";
} 

/* foreach loop works only on arrays, and is used to loop through each key value pair in an array */

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) 
{
    echo "$value <br>";
}
?>