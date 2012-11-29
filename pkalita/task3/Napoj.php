<?php
    class Napoj extends Produkt
    {
        public function __construct()
        {
            $this->nazwa = "Cola";
            $this->producent = "CocaCola Company";
            $this->cena = 1.29;
            $this->vat = 0.29;
        }
    }

?>
