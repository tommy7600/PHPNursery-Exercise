<?php

abstract class Product
{
    protected $_name;
    protected $_manufacturer;
    protected $_price;
    protected $_vat;
    protected $_quantity;

    function __construct($name, $manufacturer, $price, $vat, $quantity)
    {
        $this->_name = $name;
        $this->_manufacturer = $manufacturer;
        $this->_price = $price;
        $this->_vat = $vat;
        $this->_quantity = $quantity;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }
    
    public function setManufacturer($manufacturer)
    {
        $this->_manufacturer = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->_manufacturer;
    }
    
    public function setPrice($price)
    {
        $this->_price = $price;
    }

    public function getPrice()
    {
        return $this->_price;
    }
    
    public function setVat($vat)
    {
        $this->_vat = $vat;
    }

    public function getVat()
    {
        return $this->_vat;
    }

    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getTotalPrice()
    {
        return $this->getQuantity() * $this->getPrice();
    }

    public function getBruttoPrice()
    {
        return $this->getPrice() * (1 + (($this->_vat) / 100));
    }

    public function getTotalBruttoPrice()
    {
        return $this->getQuantity() * $this->getBruttoPrice();
    }

} 

?>