<?php
require_once('produkt.php');

class Chleb extends Produkt
{
    function __construct()
    {
        parent::__construct('Chleb', 'Piekarnia "Piekarnia"', 100, VAT::VAT0);
    }
}