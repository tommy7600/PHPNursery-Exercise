<?php
    abstract class Product {
        // FIELDS
        private $name;
        private $price;
        private $producent;
        private $vat;
        private $count;
        
        public function __construct($_name, $_price, $_producent, $_vat, $_count) {
            $this->name = $_name;
            $this->price = $_price;
            $this->producent = $_producent;
            $this->vat = $_vat;
            $this->count = $_count;
        }
        
        // GETTER
        public function __get($_name) {
            return $this->$_name;
        }
        
        // SETTER
        public function __set($_name, $_value){
            $this->$_name = $_value;
        }
        
    }