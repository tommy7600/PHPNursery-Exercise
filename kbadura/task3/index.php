<?php
header('Content-Type: text/html; charset=utf-8');

include_once("Koszyk.php");
include_once("Produkty/Produkt.php");
include_once("Produkty/Klawiatura.php");
include_once("Produkty/Laptop.php");
include_once("Produkty/Monitor.php");
include_once("Produkty/Mysz.php");
include_once("Produkty/PC.php");
include_once("Produkty/PodatekVat.php");

$koszyk = new Koszyk();
$koszyk->dodajProduktDoKoszyka(new PC(PodatekVat::podatek23, 1234.4, 's20', 'lenovo', 1, 'xeon' ,'16GB','1600W'), 1);
$koszyk->dodajProduktDoKoszyka(new Mysz(PodatekVat::podatek8, 1234.5, 'megaRat', 'Rat', 1, 3), 2);
$koszyk->dodajProduktDoKoszyka(new Monitor(PodatekVat::podatek0, 1234.6, 'f123', 'eizo', 2, 24.1), 3);
$koszyk->dodajProduktDoKoszyka(new Laptop(PodatekVat::podatek23, 1234.7, 'ideapad', 'lenovo', 3, 'xeon' ,'16GB'),4);
$koszyk->dodajProduktDoKoszyka(new Klawiatura(PodatekVat::podatek8, 1234.8, 'megaKey', 'lenovo', 4, 'dla graczy'),5);
echo 'cały koszyk <br>';
echo $koszyk->wyswietlCalyKoszyk();
echo '<br>';
echo '<br>';
echo 'zwieksz ilosc produktu o id 2 o 3 sztuki <br>';
$koszyk->zwiekszIloscProduktu(2, 3);
echo $koszyk->wyswietlCalyKoszyk();
echo '<br>';
echo '<br>';
echo 'pobierz wartość konkretnego produktu <br>';
echo $koszyk->pobierzWartoscProduktu(2);
echo '<br>';
echo '<br>';
echo '<br>';
echo 'Usuń z koszyka produkt o id 4<br>';
$koszyk->usunZkoszyka(4);
echo $koszyk->wyswietlCalyKoszyk();
echo '<br>';
echo '<br>';
echo 'Pobierz łączną wartość koszyka<br>';
echo $koszyk->pobierzLacznaWartoscKoszyka();

unset($koszyk);
?>