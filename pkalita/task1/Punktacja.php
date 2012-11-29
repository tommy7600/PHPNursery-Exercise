<?php
    class Punktacja
    {
        private $punkty;
        
        public function __construct() 
        {
            $this->punkty = 0;
        }
        
        public function getPunkty()
        {
            return $this->punkty;
        }
        
        public function actualisePoints($pts)
        {
            $this->punkty += $pts;
        }
        
        public function __destruct() 
        {
            echo $this->punkty;
        }
    }
?>
