<?php
//abstract
//php 5.4
//traits

// phpinfo();
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

trait B 
{
	
	function method3()
	{
		echo "method3 from trait B";
	}

	function method4()
	{
		echo "method4 from Trait B";
	}	
}
trait combine
{
	use A,B;
}

class useTraits
{
	use combine;
	function method1()
	{
		echo "method1 from Class useTraits";
	} 
}

$obj = new useTraits;
$obj->method1();
echo "<br>";
$obj->method2();
echo "<br>";
$obj->method3();
echo "<br>";
$obj->method4();

?>