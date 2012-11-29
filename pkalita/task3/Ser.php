<?php
    class Ser extends Produkt
    {
        public function __construct()
        {
            $this->nazwa = "Gouda";
            $this->producent = "Mlekowita";
            $this->cena = 5.29;
            $this->vat = 0.29;
        }
    }

?>
