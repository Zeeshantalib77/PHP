<?php
class MyClass {
   var $name;
   function __construct($my_name)
   {
      $this->name=$my_name; 
   }
   function show()
   {
      echo $this->name;
   }
}

$object=new MyClass("Zeeshan");
$object->show();
$object=new MyClass("Talib");
$object->show();

   /*
   $this keyword => current class object 
   used to acess data members of current class in that own particular class
   also called - execution context
    */
   ?>