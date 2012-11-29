<?php
    abstract class Produkt
    {
        protected $nazwa;
        protected $producent;
        protected $cena;
        protected $vat;
        
        // <editor-fold defaultstate="collapsed" desc="Getters">
        public function GetNazwa()
        {
            return $this->nazwa;
        }
        
        public function GetProducent()
        {
            return $this->producent;
        }
        
        public function GetCena()
        {
            return $this->cena;
        }
        
        public function GetVat()
        {
            return $this->vat;
        }
        // </editor-fold>
        
        public function GetCenaBrutto()
        {
            return $this->cena + ($this->cena*$this->vat);
        }
    }
?>
