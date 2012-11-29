<?php
class Klawiatura extends Produkt
{
    protected  $typ;

    public function setTyp($typ)
    {
        $this->typ = $typ;
    }

    public function getTyp()
    {
        return $this->typ;
    }
    
    public function __construct($vat, $netto, $nazwa, $producent, $ilosc, $typ)
    {
        parent::__construct($vat, $netto, $nazwa, $producent, $ilosc);
        $this->typ = $typ;        
    }   
}


?>