<?php

class A
{
	function __construct()
	{
		echo "Class A";
	}

	function method1()
	{
		echo "method1 from class A";
	}

	function method2()
	{
		echo "method2 from class A";
	}
}

class B extends A
{
	function __construct()
	{
		// parent::__construct();
		echo "Class B";
	}

	function method3()
	{
		echo "method3 from class B";
	}

	function method4()
	{
		echo "method4 from class B";
	}	

	function method1()
	{
		echo "method1 from class B";
	}
}

class C extends B
{
	function method1()
	{
		echo "method1 from Class C";
	}
}

// $obj_a = new A();
$obj_b = new C();
echo "<br>";

$obj_b->method1();
echo "<br>";
$obj_b->method2();
echo "<br>";
$obj_b->method3();
echo "<br>";
$obj_b->method4();
?>