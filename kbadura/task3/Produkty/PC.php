<?php
class PC extends Produkt
{
    protected $procesor;
    
    protected $ram;
    
    protected $zasilacz;

    function __construct($vat, $netto, $nazwa, $producent, $ilosc, $procesor, $ram, $zasilacz)
    {
        parent::__construct($vat, $netto, $nazwa, $producent, $ilosc);
        $this->procesor = $procesor;
        $this->ram = $ram;
        $this->zasilacz = $zasilacz;
    }

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

    public function setZasilacz($zasilacz)
    {
        $this->zasilacz = $zasilacz;
    }

    public function getZasilacz()
    {
        return $this->zasilacz;
    }


}

?>