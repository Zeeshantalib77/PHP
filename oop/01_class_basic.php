<?php
class MyClass {
   var $first_name="Zeeshan"; // members variables
   var $last_name="Talib";

   function show_message() // member functions
   {
      echo "i am function in a class";
   }
}

$object=new MyClass; // creating of object
echo $object->first_name. " ";
echo $object->last_name." ";
$object->show_message();
?>