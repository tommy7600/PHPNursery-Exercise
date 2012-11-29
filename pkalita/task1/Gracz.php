<?php
    include "Punktacja.php";
    
    class Gracz
    {
        private $punktacja;
        private $nazwisko;
        private $imie;
        
        public function __construct($name, $surname) 
        {
            $this->punktacja = new Punktacja();
            $this->imie = $name;
            $this->nazwisko = $surname;
        }
        
        public function actualisePoints($pts)
        {
            $this->punktacja->actualisePoints($pts);
        }
        
        public function __destruct() 
        {
            echo $this->imie . " " . $this->nazwisko . " ";
        }
    }
?>
