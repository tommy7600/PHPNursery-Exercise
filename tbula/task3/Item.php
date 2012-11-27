<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author tbula
 */
class Item 
{    
    private $product;
    private $quantity;
    
    public function __construct(Product $product, $quantity) 
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    
    public function AddQuantity($quantity)
    {
        $this->quantity += $quantity;
    }
    
    public function ChangeQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    public function GetGrosValue()
    {
        return $this->product->getGrosPrice() * $this->quantity;
    }
    
    public function GetQuantity()
    {
        return $this->quantity;
    }
    
    public function GetProduct()
    {
        return $this->product;
    }
}

?>
