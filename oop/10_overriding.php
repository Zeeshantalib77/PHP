<?php
class A{
   function show() 
   {
      echo "i am class A function <br>";
   }
}
Class B extends A{
   function show()
   {
      echo "i am class B function <br>";
   }
}

$object1=new B; 
$object2=new A;

$object1->show();
$object2->show();
?>