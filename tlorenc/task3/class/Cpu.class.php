<?php

class Cpu extends Product
{
    private $_mhz;

    function __construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate, $_mhz)
    {
        parent::__construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate);
        $this->_mhz = $_mhz;
    }

    public function setMhz($mhz)
    {
        $this->_mhz = $mhz;
    }

    public function getMhz()
    {
        return $this->_mhz;
    }

}
