<?php
require_once('produkt.php');

class KoszykItem
{
    private $produkt;
    private $ilosc;
    
    function __construct(Produkt $produkt, $ilosc)
    {
        $this->produkt = $produkt;
        $this->ilosc = $ilosc;
    }
    
    function get_produkt()
    {
        return $this->produkt;
    }
    
    function get_ilosc()
    {
        return $this->ilosc;
    }
    
    function set_ilosc($value)
    {
        $this->ilosc = $value;
    }
}