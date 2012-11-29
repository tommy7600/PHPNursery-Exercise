<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Basket
 *
 * @author tbula
 */
class Basket 
{
    private $items;
    
    public function __construct() 
    {
        $this->items = array();
    }
    
    public function AddItem(Product $product, $quantity)
    {
        array_push($this->items, new Item($product, $quantity));
    }
    
    public function RemoveItem(Product $product)
    {
        for($i = count($this->items)-1; $i>=0 ;$i--)
        {
            $item = $this->items[$i];
            if($item->GetProduct() == $product)
            {
                unset($this->items[$i]);
                $this->items = array_values($this->items);
                break;
            }
        }
    }
    
    public function GetOrderedItemsCount()
    {
        $count =0;
        for($i = 0; $i<count($this->items) ;$i++)
        {
            $item = $this->items[$i];
            $count+= $item->GetQuantity();
        }
        return $count;
    }
    
    public function GetOrderValue()
    {
        $value =0;
        for($i = 0; $i<count($this->items) ;$i++)
        {
            $item = $this->items[$i];
            $value+= $item->GetGrosValue();
        }
        return $value;
    }
    
    public function ChangeQuantity(Product $product, $quantity)
    {
        for($i = count($this->items)-1; $i>=0 ;$i--)
        {
            $item = $this->items[$i];
            if($item->GetProduct() == $product)
            {
                $this->items[$i]->ChangeQuantity($quantity);
                break;
            }
        }
    }
}

?>
