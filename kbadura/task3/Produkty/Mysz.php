<?php
class Mysz extends Produkt
{
    protected $iloscPrzyciskow;

    public function setIloscPrzyciskow($iloscPrzyciskow)
    {
        $this->iloscPrzyciskow = $iloscPrzyciskow;
    }

    public function getIloscPrzyciskow()
    {
        return $this->iloscPrzyciskow;
    }

    public function __construct($vat, $netto, $nazwa, $producent, $ilosc, $iloscPrzyciskow)
    {
        parent::__construct($vat, $netto, $nazwa, $producent, $ilosc);        
        $this->iloscPrzyciskow = $iloscPrzyciskow;
    }       
}

?>