<?php
class MyClass {
   var $first_name="Zeeshan";
   var $last_name="Talib";

   function show_message()
   {
      echo "i am function in a class";
   }
}

$object1=new MyClass;
$object2= clone $object1; // create another copy of object

echo $object2->first_name." ".$object2->last_name."<br>";
$object2->show_message();
?>