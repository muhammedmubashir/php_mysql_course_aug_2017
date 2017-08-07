<?php
// class test
// {
// 	//variables
// 	//functions	
// }


class test
{
	public $var1;
	public $var2;
	// function __construct()
	// {
	// 	echo "nothing";
	// }

	function __construct($a)
	{
		$this->var1 = $a;
	}
	
	// function __construct($a,$b)
	// {
	// 	$this->var1 = $a;
	// 	$this->var2 = $b;
	// }

	function method1()
	{
		$input = func_get_args();
		echo "<pre>";
		print_r($input);
		echo "</pre>";
		echo "this is method1 from class test<br>";
	}

	function getValue()
	{
		return $this->var1;
	}
}

$obj_test = new test(10);
$obj_test->method1();
$obj_test->method1(10);
$obj_test->method1(10,20,30);

// echo $obj_test->getValue();

?>