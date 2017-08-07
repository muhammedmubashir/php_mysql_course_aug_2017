<?php
trait A
{
	private function method1()
	{
		echo "method1 from trait A";
	}

	function method2()
	{
		echo "method2 from Trait A";
	}
}
class useTraits
{
	use A
	{
		A::method1 as public;
	}
}

$obj = new useTraits;
$obj->method1();


?>