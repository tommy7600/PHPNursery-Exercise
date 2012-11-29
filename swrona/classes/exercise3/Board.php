<?php

include_once("Product.php");

class Board extends Product
{
    private $_length;
    private $_width;

    function __construct($name, $manufacturer, $price, $vat, $quantity, $length, $width)
    {
        parent::__construct($name, $manufacturer, $price, $vat, $quantity);
        $this->_length = $length;
        $this->_width = $width;
    }

    public function setLength($length)
    {
        $this->_length = $length;
    }

    public function getLength()
    {
        return $this->_length;
    }
    
    public function setWidth($width)
    {
        $this->_width = $width;
    }

    public function getWidth()
    {
        return $this->_width;
    }

} 

?>