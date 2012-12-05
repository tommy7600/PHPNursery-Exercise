<?php
    class CustomView
    {
        // fields.
        public $data = array();
        
        // constructor.
        public function __construct() {
            
        }
        
        public function render()
        {
            $y = "kamil";
            include('view/Welcome.php');
        }
        
    }