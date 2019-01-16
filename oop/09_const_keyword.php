<?php
class MyClass {
   const value=3.14;

   function show_value()
   {
      echo self::value;
   }
}

echo MyClass::value;
echo "<br>";

$object=new MyClass;
$object->show_value();
?>