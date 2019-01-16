<?php
class MyClass {
   Public static $first_name;
   Public static $age;

   function show_information()
   {
      echo self::$first_name." ".self::$age;
   }
}

MyClass::$first_name="Zeeshan";
MyClass::$age=23;
MyClass::show_information();

/*
=> Class can access statics with the self keyword
=> Outside world accesses statics with the class name

1 - Defining method or property as 'static' makes them accessible without needing an instantiation of a class
2 - Accessed with the double-colon (::) operator instead of the member (->) operator 
3 - $this is not available in static methods
4 - Static properties and methods can also have scope defined – public, private or protected


*/
?>