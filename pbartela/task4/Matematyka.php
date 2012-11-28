<?php

class Matematyka {
   
    static function poleKola($r,$round=0)
    {
        $temp=3.14*pow($r,2);
        return round($temp, $round);
    }
    static function obwodKola($r,$round=0)
    {
        $temp=6.28*$r;
        return round($temp, $round);
    }
    static function fLiniowa($x1,$y1,$x2,$y2,$round=0)
    {
       if(($x1-$x2)!=0)
       {
           $a1=($y1-$y2);
           $a2=($x1-$x2);
           $a=($a1/$a2);
           $b =$y2-($a*$x2);
          echo 'y='.round($a,$round).' x+'.round($b,$round).'<br>';
       }
    }
    
    static function fKwadrartowa($a,$b,$c,$round=0)
    {
        if($a==0)
        {
            echo 'To nie jest funkcja kwadratowa';
        }
        $dt = pow($b,2) -4*$a*$c;
        if($dt<0)
        {
            echo 'Nie ma miejsc zerowych';
        }
        
        if($dt==0)
        {
            $x0= -$b/(2 *$a);
            echo 'Jedno miejsce zerow x0: '.round($x0,$round).'<br>';
        }
        else
        {
         $x1 = (-$b+sqrt($dt))/(2*$a);
         $x2 = (-$b-sqrt($dt))/(2*$a);   
         echo 'Dwa miejsca zerowe x1: '.round($x1,$round).' x2: '.round($x2,$round).'<br>';
        }
        
        function factorial ($n,$round=0)
        { 
            $wynik = 1;
            if ($n > 0) 
                {
                    $wymnik = $n * factorial(($n - 1));
                }
            return round($wynik,$round);
        }
    }
}

?>
