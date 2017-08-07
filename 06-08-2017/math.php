<?php
class Math
{
	static function getPower($number,$p)
	{
		return pow($number,$p);
	}
}

// $obj_math = new Math;
// echo $obj_math->getPower(2,4);

echo Math::getPower(2,5);
?>