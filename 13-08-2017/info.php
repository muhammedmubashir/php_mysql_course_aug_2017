<?php
//traits php5.4, static, final, encapsulation, singleton design pattern, closure.
// abstract, interface

abstract class A
{
	function method1()
	{
		echo "method1 from Class A";
	}

	abstract function method2();
}

class B extends A
{
	function method2()
	{
		echo "method2 from class B";
	}
}



$obj_b = new B();
$obj_b->method1();
$obj_b->method2();
?>