<?php

class Speakers extends Product
{
    private $_rms;

    function __construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate, $_rms)
    {
        parent::__construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate);
        $this->_rms = $_rms;
    }

    public function setRms($rms)
    {
        $this->_rms = $rms;
    }

    public function getRms()
    {
        return $this->_rms;
    }

}
