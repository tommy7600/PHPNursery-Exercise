<?php

class Matematyka {
    public static function CalculateCircleArea($radius)
    {
        return 3.141 * $radius * $radius;
    }
    
    public static function CalculateCircleCircumference($radius)
    {
        return 3.141 * 2 * $radius;
    }
    
    public static function CalculateLinearFunc($a, $x, $b)
    {
        return $a*$x + $b;
    }
    
    public static function CalculateSquareFunc($a, $x, $b, $c)
    {
        return $a*($x*$x) + $b*$x + $c;
    }
    
    public static function CalculateFactorial($a)
    {
        $factorial = 1;
        for($i = 1; $i <= $a; $i++)
        {
            $factorial *= $i;
        }
        return $factorial;
    }
    
    public static function Zaokr($val, $PoPrzecinku)
    {
        return round($val, $PoPrzecinku);
    }
}

?>
