<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 12:32 PM
 * To change this template use File | Settings | File Templates.
 */

include("Punktacja.php");

class Gracz
{
    public $imie;
    public $nazwisko;
    private $punktacja;

    public function __construct($imie, $nazwisko)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->punktacja = new Punktacja;
    }

    public function __destruct()
    {
        echo $this->imie." ".$this->nazwisko;
        unset($this->imie);
        unset($this->nazwisko);
        unset($this->punktacja);
    }

    public function aktualizujPunktacje($punkty)
    {
        if($punkty == 1)
        {
            $this->punktacja->dodajPunkt();
        }
        elseif($punkty == -1)
        {
            $this->punktacja->odejmnijPunkty();
        }
        else
        {
            $this->punktacja->dodajBonus($punkty);
        }
    }
}
