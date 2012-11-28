<?php
    class Computer extends Product {
        
        // CONSTRUCTOR
        public function __construct($_name, $_price, $_producent, $_vat, $_count) {
            parent::__construct($_name, $_price, $_producent, $_vat, $_count);
        }
        
    }