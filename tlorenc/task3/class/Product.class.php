<?php

abstract class Product
{
    protected $_id;
    protected $_productName;
    protected $_productMaker;
    protected $_netPrice;
    protected $_quantity;
    protected $_vatRate;

    function __construct($_id, $_netPrice, $_productMaker, $_productName, $_quantity, $_vatRate)
    {
        $this->_id = $_id;
        $this->_netPrice = $_netPrice;
        $this->_productMaker = $_productMaker;
        $this->_productName = $_productName;
        $this->_quantity = $_quantity;
        $this->_vatRate = $_vatRate;
    }

    public function setVatRate($vatRate)
    {
        $this->_vatRate = $vatRate;
    }

    public function getVatRate()
    {
        return $this->_vatRate;
    }


    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setNetPrice($netPrice)
    {
        $this->_netPrice = $netPrice;
    }

    public function getNetPrice()
    {
        return $this->_netPrice;
    }

    public function setProductMaker($productMaker)
    {
        $this->_productMaker = $productMaker;
    }

    public function getProductMaker()
    {
        return $this->_productMaker;
    }

    public function setProductName($productName)
    {
        $this->_productName = $productName;
    }

    public function getProductName()
    {
        return $this->_productName;
    }

    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getTotalNetPrice()
    {
        return $this->getQuantity() * $this->getNetPrice();
    }

    public function getGrossPrice()
    {
        return $this->getNetPrice() + (($this->getNetPrice() * $this->_vatRate) / 100);
    }

    public function getTotalGrossPrice()
    {
        return $this->getQuantity() * $this->getGrossPrice($this->_vatRate);
    }

}
