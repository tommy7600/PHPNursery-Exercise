<?php

class Hdd extends Product
{
    private $_capacity;

    function __construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate, $_capacity)
    {
        parent::__construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate);
        $this->_capacity = $_capacity;
    }

    public function setCapacity($capacity)
    {
        $this->_capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->_capacity;
    }

}
