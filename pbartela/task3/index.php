<?php

include 'produkt.php';
include 'sklep.php';
$koszyk[] = array();
$koszyk = new sklep();
$lizak = new lizak('lizak','czupaczups',3);
$lizak->ustaw8Vat();

$koszyk->dodajProdukt($lizak);

$beton = new beton('beton','atlas',25);
$beton->ustaw23Vat();

$koszyk->dodajProdukt($beton);

$zelki = new zelki('zelki','biedronka',2.5);
$zelki->ustaw0Vat();
$zelki->ustawIlosc(3);

$koszyk->dodajProdukt($zelki);

$monitor = new monitor('monitor','samsung',100);
$monitor->ustaw8Vat();

$koszyk->dodajProdukt($monitor);

$ser = new ser('gouda','mlekpol',7);
$ser->ustaw23Vat();

$koszyk->dodajProdukt($ser);



foreach($koszyk->dajProdukty() as $key=>$value)
{
    
    echo 'Nazwa: '.$value->dajNazwe().'<br>';
    echo 'Producent: '.$value->dajProducenta().'<br>';
    echo 'Ilosc: '.$value->dajIlosc().'<br>';
    echo 'Netto: '.$value->dajNetto().'<br>';
    echo 'Netto lacznie : '.$value->dajNettoWszystkich().'<br>';
    echo 'Vat: '.$value->dajVat().'<br>';
    echo 'Brutto: '.$value->dajBrutto().'<br>';
    echo 'Brutto lacznie: '.$value->dajBruttoWszystkich().'<br>';
    echo '-----------------------------------------<br>';
}


?>
