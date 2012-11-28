<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 12:01 PM
 * To change this template use File | Settings | File Templates.
 */
class Punktacja
{
    public $punkty;

    public function __construct()
    {
        $this->punkty = 0;
    }

    public function dodajPunkt()
    {
        $this->punkty++;
    }

    public function dodajBonus($punkty)
    {
        if(($this->punkty + $punkty) > 0)
        {
            $this->punkty += $punkty;
        }
        else
        {
            $this->punkty = 0;
        }
    }

    public function odejmnijPunkty()
    {
        if($this->punkty > 1)
        {
            $this->punkty--;
        }
    }

    public function ilePunktow()
    {
        echo $this->punkty;
    }

    public function __destruct()
    {
        echo "Ostateczna ilosc punktow to: ".$this->punkty;
        unset($this->punkty);
    }
}
