<?php
class A{
   Public $a=10;
   function show_A() 
   {
      echo "i am class A function";
   }
}
Class B extends A{
   Public $b=20;
   function show_B()
   {
      echo "i am class B function";
   }
}

$object=new B; 
$object->show_A();
echo " value of a=".$object->a;
echo "<br>";
$object->show_B();
echo " value of a=".$object->b;
?>