<?php
    include "Artykul.php";
    
    class ArtykulKolekcja 
    {
        private $artykuly;
        
        public function __construct()
        {
            $this->artykuly = array();
        }
        
        public function DodajArtykul(Artykul $art)
        {
            $this->artykuly[$art->GetId()] = $art;
        }
        
        public function UsunArtykulPoId($id)
        {
            unset($this->artykuly[$id]);
        }
        
        public function Pobierz_Wszystko()
        {
            return $this->artykuly;
        }
    }
?>
