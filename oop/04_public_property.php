<?php
class MyClass {
   Public $name="Zeeshan";
   Public $age=10;
   function show_information()
   {
      echo $this->name." ".$this->age;
   }
}

$object=new MyClass;
$object->show_information();

echo "<br>";

// public property can also be acessed from outslide the class
echo $object->name." ";
echo $object->age;

?>