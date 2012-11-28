<?php

class Math
{
    public static function quadraticFunction($a, $b, $c, $round)
    {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return ('The equation does not have real roots');
        } elseif ($delta == 0) {
            $x1 = -$b / (2 * $a);
            return "The equation has one real root: " . round($x1, $round);
        } else {
            $x1 = (-$b - sqrt($delta)) / (2 * $a);
            $x2 = (-$b + sqrt($delta)) / (2 * $a);
            return "The equation has two real roots: " . round($x1, $round) . " and " . round($x2, $round);
        }
    }

    public static function linearFunction($a, $b, $round)
    {
        if ($a == 0) {
            return "Brak miejsca zerowego";
        } else {
            $x0 = -$b / $a;
            return "Miejsce zerowe x0 tej funkcji to: " . round($x0, $round);
        }
    }

    public static function factorial($integer)
    {
        if ($integer < 0)
            return "Factorial is defined for positive natural Numbers only";
        else if (!is_int($integer))
            return "Factorial is defined for natural Numbers (Integer) only";
        else if ($integer == 0)
            return 1;
        else
            return $integer * self::factorial($integer - 1);
    }

    public static function circleArea($r, $round)
    {
        return "Circle area: " . round(($r * $r * 3.14), $round);
    }

    public static function circumferenceOfACircle($r, $round)
    {
        return "Circumference: " . round((2 * $r * 3.14), $round);
    }

}

