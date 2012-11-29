<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kamil
 * Date: 27.11.12
 * Time: 21:40
 * To change this template use File | Settings | File Templates.
 */
class Matematyka
{
    public static function poleKola($promien)
    {
        return M_PI*$promien^2;
    }

    public static function obwodKola($promien)
    {
        return M_PI*2*$promien;
    }

    public static function funkcjaLiniowa($x, $a, $b)
    {
        return $a*$x+$b;
    }

    public static function funkcjaKwadratowa($a, $b, $c)
    {
        $delta = $b^2 + 4*$a*$c;

        if($delta>0)
        {
            $sqrtDelta =sqrt($delta);
            $x1 = (-$b -$sqrtDelta)/2*$a;
            $x2 = (-$b +$sqrtDelta)/2*$a;

            return 'x1: '.$x1.'<br> x2: '.$x2;
        }
        elseif($delta==0)
        {
            $x=-$b/2*$a;
            return 'x: '.$x;
        }
    }

    public static function silnia($liczba)
    {
        if($liczba < 2)
            return $liczba;

        return $liczba*self::silnia($liczba-1);
    }
}
