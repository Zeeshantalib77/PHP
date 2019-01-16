<?php

// if statement - executes some code if one condition is true
$marks=60;
if ($marks==60) 
{
	echo "Yahoo ! I pass my exam <br>";
}

//if else statement - executes some code if a condition is true and another code if that condition is false
if($marks==40) 
{
	echo "Wow ! I passed my exam <br>";
} 
else 
{
	echo "Sorry you failed <br>";
}

/* if...elseif....else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed */

if($marks>70) 
{
	echo "Wow ! Your marks are excellent <br>";
} 
elseif($marks>60) 
{
	echo "Sorry your marks are average <br>";
}
else
{
	echo "Sorry your marks are not extra-ordinary <br>";
}

?>