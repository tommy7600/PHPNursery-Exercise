<?php
class Matematyka
{
    static function poleKola($promien, $dokladnosc = 10)
    {
        return round(M_PI * $promien * $promien, $dokladnosc);
    }
    
    static function obwodKola($promien, $dokladnosc = 10)
    {
        return round(2 * M_PI * $promien, $dokladnosc);
    }
    
    static function funkcjaLiniowa($a, $b, $x, $dokladnosc = 10)
    {
        return round($a * $x + $b, $dokladnosc);
    }
    
    static function funkcjaKwadratowa($a, $b, $c, $x, $dokladnosc = 10)
    {
        return round($a * $x * $x + $b * $x + $c, $dokladnosc);
    }
    
    static function silnia($x, $dokladnosc = 10)
    {
        $i = $a = 1;
        
        while ($i<=$x){
            $a = $a * $i;
            $i++;
        }
        
        return $a;
    }
}