<?php

class Tv extends Product
{
    private $_screenSize;

    function __construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate, $_screenSize)
    {
        parent::__construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate);
        $this->_screenSize = $_screenSize;
    }

    public function setScreenSize($screenSize)
    {
        $this->_screenSize = $screenSize;
    }

    public function getScreenSize()
    {
        return $this->_screenSize;
    }

}
