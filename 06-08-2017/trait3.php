<?php
trait A
{
	function method1()
	{
		echo "method1 from trait A";
	}

	function method2()
	{
		echo "method2 from Trait A";
	}
}

class Abbo
{
	function method1()
	{
		echo "method1 from class something";
	}
}
class son extends Abbo
{
	function method1()
	{
		echo "method1 from class son";
	}
	use A;
	
}


$obj = new son;
$obj->method1();




?>