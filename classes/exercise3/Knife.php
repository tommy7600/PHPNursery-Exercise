<?php

include_once("Product.php");

class Knife extends Product
{
    private $_length;

    function __construct($name, $manufacturer, $price, $vat, $quantity, $length)
    {
        parent::__construct($name, $manufacturer, $price, $vat, $quantity);
        $this->_length = $length;
    }

    public function setLength($length)
    {
        $this->_length = $length;
    }

    public function getLength()
    {
        return $this->_length;
    }

} 

?>