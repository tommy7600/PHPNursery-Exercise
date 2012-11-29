<?php

include_once("Product.php");

class Boots extends Product
{
    private $_size;

    function __construct($name, $manufacturer, $price, $vat, $quantity, $size)
    {
        parent::__construct($name, $manufacturer, $price, $vat, $quantity);
        $this->_size = $size;
    }

    public function setSize($size)
    {
        $this->_size = $size;
    }

    public function getSize()
    {
        return $this->_size;
    }

} 

?>