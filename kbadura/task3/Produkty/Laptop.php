<?php
class Laptop extends Produkt
{
    protected $procesor;
    
    protected $ram;

    public function setProcesor($procesor)
    {
        $this->procesor = $procesor;
    }

    public function getProcesor()
    {
        return $this->procesor;
    }

    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function getRam()
    {
        return $this->ram;
    }


    public function __construct($vat, $netto, $nazwa, $producent, $ilosc, $procesor, $ram)
    {
        parent::__construct($vat, $netto, $nazwa, $producent, $ilosc);
        $this->procesor = $procesor;
        $this->ram = $ram;
    }        
    
}

?>