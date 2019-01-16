<?php

echo strlen("Hello world!"); echo "<br>";
// outputs 12 - returns the length of a string

echo str_word_count("Hello world!"); echo "<br>";
// outputs 2 - counts the number of words in a string

echo strrev("Hello world!"); echo "<br>";
// outputs !dlrow olleH - reverses a string

echo strpos("Hello world!", "world"); echo "<br>";
/* outputs 6 - searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. */
echo str_replace("world", "Dolly", "Hello world!"); echo "<br>"; 
// outputs Hello Dolly! - replaces some characters with some other characters in a string.




?>