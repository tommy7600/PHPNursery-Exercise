<?php
    class Batonik extends Produkt
    {
        public function __construct()
        {
            $this->nazwa = "Mars";
            $this->producent = "Mars Incorporated";
            $this->cena = 1.29;
            $this->vat = 0.29;
        }
    }

?>
