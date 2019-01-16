<?php
class MyClass {
   var $name;
   function __construct()
   {
      echo "i am constructor and called at start <br>"; 
   }
   
   function __destruct()
   {
      echo "i am destructor and called at the end <br>";
   }
}

$object=new MyClass;

   /*
   __construct => constructor is automatically called when we create object of that class

   __destructor => destructor is automatically called when object is closed and script is shutting down
    */
   ?>