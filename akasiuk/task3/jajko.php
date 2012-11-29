<?php
require_once('produkt.php');

class Jajko extends Produkt
{
    function __construct()
    {
        parent::__construct('Jajko', 'Kura', 0.5, VAT::VAT23);
    }
}