<?php
require_once('produkt.php');

class Banan extends Produkt
{
    function __construct()
    {
        parent::__construct('Banan', 'Drzewo', 2, VAT::VAT8);
    }
}