<?php
class MyClass {
	Private $name="Zeeshan";
	Private $age=10;
	private $first_name,$last_name;

	function show_information()
	{
		echo $this->name." ".$this->age;
	}

	// for acessing private elements from outside we use getter and setter
	function set_full_name($f_name,$l_name)
	{
		$this->first_name=$f_name;
		$this->last_name=$l_name;
	}
	function get_full_name()
	{
		echo $this->first_name." ".$this->last_name;
	}
}

$object=new MyClass;
$object->show_information();
echo "<br>";
$object->set_full_name("Ali","Hamza");
$object->get_full_name();

//echo $object->name." "; // this will give an error
//echo $object->age;

// private property can not acessed from outslide the class because it is private

?>