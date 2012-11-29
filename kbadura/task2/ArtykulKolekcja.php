<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 1:38 PM
 * To change this template use File | Settings | File Templates.
 */
include("Artykul.php");

class ArtykulKolekcja
{
    public $kolekcja = array();

    public function pobierzWszystkie()
    {
        $result = array();
        foreach ($this->kolekcja as $key => $val) {
            $result[$key] = $val->getTytul().' '.$val->getAutor().' '.$val->getTresc().' '.$val->getDataDodania();
        }

        return $result;
    }

    public function dodajArtykul(Artykul $artykul)
    {
        $this->kolekcja[$artykul->getId()] = $artykul;
    }

    public function usunArtykul($id)
    {
        unset($this->kolekcja[$id]);
    }
}
