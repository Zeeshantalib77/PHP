<?php

/* A constant is an identifier (name) for a simple value. The value cannot be changed during the script. Unlike variables, constants are automatically global across the entire script
define(name, value, case-insensitive) */

define("GREETING", "Welcome to Home Page !");
echo GREETING;

echo "<br>";

// case-insensitive constant name
define("GREETING", "Welcome to Home Page 2!", true);
echo greeting;

echo "<br>";

function myTest() 
{
    echo GREETING;
}
 
myTest();


?>