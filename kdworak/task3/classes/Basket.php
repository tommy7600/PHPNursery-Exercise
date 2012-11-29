<?php
    class Basket {
        // FIELDS
        private $collection;
        
        // CONSTRUCTOR
        public function __construct() {
            $this->collection = array();
        }
        
        // METHODS
        public function AddToBasket(Product $_product){
            array_push($this->collection, $_product);
        }
        
        public function GetTotalCount(){
            $totalCount = 0;
            foreach($this->collection as $key => $val){
                $totalCount += $val->count;
            }
            return $totalCount;
            
        }
        
        public function GetTotalCost(){
            $totalCost = 0;
            foreach ($this->collection as $key => $val){
                $totalCost += ($val->price * $val->count);
            }
            return $totalCost;
            
        }
        
        public function ShowAllItems(){
            foreach ($this->collection as $key => $val){
                echo '<br>Name: ' . $val->name . '<br>';
                echo 'Price(Netto): ' . $val->price . '<br>';
                echo 'Price(Brutto): ' . ($val->price + ($val->price * ($val->vat / 100)) ) . '<br>';
                echo 'Producent: ' . $val->producent . '<br>';
                echo 'Vat: ' . $val->vat . '<br>';
                echo 'Count: ' . $val->count . '<br>';
                echo '-----------------------------------------';
            }
        }
        
        public function RemoveElementByName($_name){
            foreach($this->collection as $key => $val){
                if($val->name == $_name){
                    unset($this->collection[$key]);
                    break;
                }
            }
        }
        
        public function AddCountToProductByName($_name, $_count){
            foreach($this->collection as $key => $val){
                if($val->name == $_name){
                    $this->collection[$key]->count = $_count;
                    break;
                }
            }
        }
        
        public function SubCountToProductByName($_name, $_count){
            foreach($this->collection as $key => $val){
                if($val->name == $_name){
                    $this->collection[$key]->count -= $_count;
                    break;
                }
            }
        }
        
    }