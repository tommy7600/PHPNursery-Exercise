<?php
include 'Artykul.php';
 class ArtykulKolekcja 
{
    private $kolekcja;
    
    function __construct()
    {
        $this->kolekcja=array();
    }
    public function dodaj(Artykul $przedmiot)
    {
        $this->kolekcja[$przedmiot->dajID()]=$przedmiot;
    }
    public function pobierzWszystko()
    {
        return $this->kolekcja;
    }
    public function usunOID($id)
    {
        unset($this->kolekcja[$id]);
    }
 }
?>
