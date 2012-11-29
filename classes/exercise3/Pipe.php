<?php

include_once("Product.php");

class Pipe extends Product
{
    private $_length;
    private $_diameter;

    function __construct($name, $manufacturer, $price, $vat, $quantity, $length, $diameter)
    {
        parent::__construct($name, $manufacturer, $price, $vat, $quantity);
        $this->_length = $length;
        $this->_diameter = $diameter;
    }

    public function setLength($length)
    {
        $this->_length = $length;
    }

    public function getLength()
    {
        return $this->_length;
    }
    
    public function setDiameter($diameter)
    {
        $this->_diameter = $diameter;
    }

    public function getDiameter()
    {
        return $this->_diameter;
    }

} 

?>