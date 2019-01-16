<?php
class MyClass {
	Public $variable;
	function show()
	{
		echo $this->variable;
	}
}

$object=new MyClass;
$object->variable=10;
$data=serialize($object);

//store $data in a file
file_put_contents ('data.dat', $data); 

// retrieve $date from file
$data=file_get_contents('data.dat');
$object=unserialize($data);
$object->myPrint(); // prints 10

/*
1 - Serializing is the process of transforming an object into a string,
and UnSerializing is the process of transforming a string into an object
for string purpose

2 - serialize ($object) – returns string, representing the object
3 - unserialize ($string) – returns new object, that is restored from the serialized string

*/
?>