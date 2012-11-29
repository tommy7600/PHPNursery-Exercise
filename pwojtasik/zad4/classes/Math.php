<?php

class Math
{
	static public function circleArea($a, $round)
	{
        return round(pi() * ($a * $a), $round);
	}

	static public function circumferenceOfCircle($a, $round)
	{
        return round(2 * pi() * $a, $round);
	}

	static public function linearFunction($a, $b, $x, $round)
	{
        return round($a * $x + $b, $round);
	}

	static public function quadraticFunction($a, $b, $c, $x, $round)
	{
		Validation::isInt(array($a, $b, $c, $x));
        return round(($a * ($x * $x)) + ($b * $x) + $c, $round);
	}

	static public function factorial($a)
	{
		$result = 1;
        for($i = 1; $i <= $a; $i++){
            $result *= $i;
        }
        return $result;
	}
}