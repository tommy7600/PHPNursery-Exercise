<?php
require_once('produkt.php');

class Mars extends Produkt
{
    function __construct()
    {
        parent::__construct('Mars', 'Mars', 1.5, VAT::VAT8);
    }
}