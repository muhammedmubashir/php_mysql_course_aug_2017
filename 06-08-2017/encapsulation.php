<?php

//encapsulation
class A
{
	public $var1;
	protected $var2;
	private $var3;

	function getVariables()
	{
		echo $this->var1."<br>";
		echo $this->var2."<br>";
		echo $this->var3."<br>";
	}
}

// $obj_a = new A();
// $obj_a->var1 = 10;
// //$obj_a->var2 = 20;
// $obj_a->var3 = 30;
// $obj_a->getVariables();
class B extends A 
{
	private $var4;
	private function __construct()
	{
		$this->var1 = 10;
		$this->var2 = 20;
		$this->var3 = 30;
	}

	static function create_object_b()
	{
		static $obj;
		if(!is_object($obj))
		{
			echo "again here";
			$obj = new B();
		}
		return $obj;
	}

	function getVar4()
	{
		return $this->var4;
	}

	function setVar4($value)
	{
		$this->var4 = $value;
	}

	private function test()
	{
		echo "this is private method test from class B";
	}

	function calltest()
	{
		$this->test();
	}

}


// $obj_b = new B();
// $obj_b->getVariables();
// $obj_b->setVar4(40);
// echo $obj_b->getVar4();
// $obj_b->calltest();

$obj_b1 = B::create_object_b();
$obj_b2 = B::create_object_b();
$obj_b3 = B::create_object_b();
$obj_b4 = B::create_object_b();
$obj_b5 = B::create_object_b();
if(is_object($obj_b1) && is_object($obj_b2))
{
	echo "Object found";
}
else
{
	echo "object not found";
}



?>