<?php
require_once('vat.php');

abstract class Produkt
{
    private $nazwa;
    private $producent;
    private $cenaNetto;
    private $vat;
    
    protected function __construct($nazwa, $producent, $cenaNetto, $vat)
    {
        $this->nazwa        = $nazwa;
        $this->producent    = $producent;
        $this->cenaNetto    = $cenaNetto;
        $this->vat          = $vat;
    }
    
    function get_nazwa()
    {
        return $this->nazwa;
    }
    
    function get_producent()
    {
        return $this->producent;
    }
    
    function get_cenaNetto()
    {
        return round($this->cenaNetto, 2);
    }
    
    function get_cenaBrutto()
    {
        return round($this->cenaNetto * (1 + $this->vat), 2);
    }
}