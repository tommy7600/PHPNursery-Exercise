<?php
    class Score {
        
        // FIELDS
        private $points;
        
        // PROPERTIES
        // SETTERS
        public function SetPoint($value){
            $this->points = $value;
        }
        
        // CONSTRUCTOR
        public function __construct(){
            $this->points = 0;
        }
        
        // DESTRUCTOR
        public function __destruct() {
            echo 'Points: '.$this->points . '<br>';
        }
        
        // METHODS
        public function AddPoints($_points){
            $this->points += $_points;
        }
        
        public function SubPoints($_points){
            $this->points -= $_points;
        }
        
    }