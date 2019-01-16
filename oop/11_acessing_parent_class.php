<?php
class A{
	protected $variable;
	public function __construct() 
	{
		$this->variable="zeeshan";
	}
}
Class B extends A{
	public function __construct() 
	{
		parent::__construct();
		echo $this->variable;
	}
}

$object1=new B; 

?>