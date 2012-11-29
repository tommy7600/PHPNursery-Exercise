<?php

class Mathematics
{
	public static function circleArea($radius)
	{
		return 3.14*(pow($radius, 2));
	}
	
	public static function circleCircuit($radius)
	{
		return 2*3.14*$radius;
	}
	
	public static function linearFunction($a, $b, $x)
	{
		return $a*$x+$b;
	}
	
	public static function squareFunction($a, $b, $c, $x)
	{
		return $a*(pow($x, 2))+$b*$x+$c;
	}
	
	public static function factorial($a)
	{
		$result = 1;
		if ($a > 0)
		{
			$result = (int)$a * $this->factorial(((int)$a - 1));
		}
		return $result;
	}
	
	public static function round($number, $precision = 0)
	{
		return round((float)$number, (int)$precision);
	}
}

?>