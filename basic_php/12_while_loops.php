<?php
/*  while : loops through a block of code as long as the specified condition is true */
$a=1; 
while($a<=5) 
{
	echo "Value of a = $a <br>";
	$a++;
} 

/* do while loop would execute its statements at least once, even if the condition is false the first time */
echo "<br>";
$b=1; 
do {
    echo "Value of b = $b <br>";
    $b++;
} while ($b<=5);

?>