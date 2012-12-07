<?php
    class CustomView
    {
        // fields.
        public $data = array();
        private $viewName;
        
        // constructor.
        public function __construct($viewName) {
            $this->viewName = $viewName;
        }
        
        public function render()
        {
            $viewName = $this->viewName;
            include('view/Layout.php');
        }
        
    }