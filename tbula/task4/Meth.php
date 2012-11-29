<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Meth
 *
 * @author tbula
 */
class Meth 
{
    public static function CircleArea($radius, $precision = -1)
    {
        return Meth::RoundValue(pi()* $radius * $radius, $precision);
    }
    
    public static function CircleCircumference($radius, $precision = -1)
    {
        return Meth::RoundValue(2 * pi() *$radius, $precision);
    }
    public static function LinearFunction($a, $b, $x, $precision = -1)
    {
        return Meth::RoundValue($a * $x + $b, $precision);
    }
    
    public static function Factorial($value, $precision)
    {
       $factorial = 1;
       for ($i=1; $i<=$value; $i++) 
       {
         $factorial *= $i;
       }
       return Meth::RoundValue($factorial, $precision);
    }
    
    public static function QuadraticFunction (&$x1, &$x2, $a, $b, $c, $precision = -1)
    {
        $delta = $b * $b - 4 * $a * $c;
        
        if($delta <0)
        {
            throw  new Exception("Negativ delta");
        }
        else if($delta == 0)
        {
            $x1 = $x2 = RoundValue(-$b /(2*$a), $precision);
        }
        else
        {
            $x1 = Meth::RoundValue((-$b - sqrt($delta))/2*$a, $precision);
            $x2 = Meth::RoundValue((-$b + sqrt($delta))/2*$a, $precision);
        }
    }
    
    private static function RoundValue($value, $precision)
    {
        if($precision >= 0 )
        {
            $value = round($value, $precision);
        }
        
        return $value;
    }
}

?>
