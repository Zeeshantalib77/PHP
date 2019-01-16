<?php
class A{
   protected $name="Zeeshan";
}
Class B extends A{
   function show_name()
   {
      echo $this->name;
   }
}

$object=new B; 
$object->show_name();

// $object->name; // this will generate error becuase Protected property can only be accessed by descendant classes (see inheritance) only

?>