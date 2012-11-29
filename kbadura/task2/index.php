<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 2:38 PM
 * To change this template use File | Settings | File Templates.
 */

include "ArtykulKolekcja.php";

$kolekcja = new ArtykulKolekcja;


$kolekcja->dodajArtykul((new Artykul)->setId(1)->setAutor('Kamil')->setTytul('Fajny artykul')->setTresc('TakaFajnaTresc aaa')->setDataDodania(date('Y-m-d H:i:s'))->setWidocznosc(false));
$kolekcja->dodajArtykul((new Artykul)->setId(2)->setAutor('Kamil')->setTytul('Fajny artykul 2')->setTresc('TakaFajnaTresc bbb')->setDataDodania(date('Y-m-d H:i:s'))->setWidocznosc(true));
$kolekcja->dodajArtykul((new Artykul)->setId(3)->setAutor('Kamil')->setTytul('Fajny artykul 3')->setTresc('TakaFajnaTresc ccc')->setDataDodania(date('Y-m-d H:i:s'))->setWidocznosc(true));

var_dump($kolekcja->pobierzWszystkie());

$kolekcja->usunArtykul(1);
var_dump($kolekcja->pobierzWszystkie());
