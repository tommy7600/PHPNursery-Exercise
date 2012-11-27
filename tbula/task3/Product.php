<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author tbula
 */
class Product 
{    
    protected $name;
    protected $producer;
    protected $netPrice;
    protected $tax;
    
    public function __construct($name, $producer, $netPrice, $tax) 
    {
        $this->name = $name;
        $this->producer = $producer;
        $this->netPrice = $netPrice;
        $this->tax = $tax;
    }
    
    public function GetName()
    {
        return $this->name;
    }
    
    public function GetProducer()
    {
        return $this->producer;
    }
    
    public function GetNetPrice()
    {
        return $this->netPrice;
    }
    
    public function  GetTax()
    {
        return $this->tax;
    }
    
    public function GetGrosPrice()
    {
        return ($this->netPrice * $this->tax)/100 +$this->netPrice;
    }
}

?>
