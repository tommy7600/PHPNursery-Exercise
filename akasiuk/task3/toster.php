<?php
require_once('produkt.php');

class Toster extends Produkt
{
    function __construct()
    {
        parent::__construct('Toster', 'Amica', 100, VAT::VAT23);
    }
}