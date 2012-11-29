<?php

class Math
{
    public static function circleArea($r, $round)
    {
        return round(pi() * $r * $r, $round);
    }

    public static function circleCircumference($r, $round)
    {
        return round(2 * pi() * $r, $round);
    }
    
    public static function linearFunction($a, $b, $round)
    {
        if ($a == 0) {
            return "Parameter a is equal zero, it's not a linear function!";
        } else {
            return round(-$b / $a, $round);
        }
    }
    
    public static function quadraticFunction($a, $b, $c, $round)
    {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return ("This equation doesn't have real roots");
        } elseif ($delta == 0) {
            return round(-$b / (2 * $a), $round);
        } else {
            return array(round((-$b - sqrt($delta)) / (2 * $a), $round), round((-$b + sqrt($delta)) / (2 * $a), $round));
        }
    }

    public static function factorial($integer)
    {
        if (($integer < 0) || (!is_int($integer)))
            return "Factorial is defined for positive natural numbers only";
        else if ($integer == 0)
            return 1;
        else
            return $integer * self::factorial($integer - 1);
    }

}
 
?>