<?php

include 'ArtykulKolekcja.php';

$kolekcjaA = new ArtykulKolekcja;

$przedmiot = new Artykul;

$przedmiot
        ->ustawAutora('Piotrek')
        ->ustawTresc('tresc')
        ->ustawID(1)
        ->ustawDate_Dodania('21.12.12')
        ->ustawWIdocznosc(true);

$kolekcjaA->dodaj($przedmiot);
$przedmiot2 = new Artykul;

$przedmiot2
        ->ustawAutora('Tom')
        ->ustawTresc('trescidwie')
        ->ustawID(2)
        ->ustawDate_Dodania('11.12.12')
        ->ustawWIdocznosc(true);
$kolekcjaA->dodaj($przedmiot2);




$wszystko=$kolekcjaA->pobierzWszystko();

foreach($wszystko as $jeden)
{
 echo $jeden->dajId().'<br>';
 echo $jeden->dajTresc().'<br>';
 echo $jeden->dajAutora().'<br>';
 echo $jeden->dajDate_dodania().'<br>';
 echo $jeden->dajWidocznosc().'<br>'; 
}
$kolekcjaA->usunOID(1);
echo "////////////////Po usunieciu id =1 ///////////////";
$wszystko=$kolekcjaA->pobierzWszystko();

foreach($wszystko as $jeden)
{
 echo $jeden->dajId().'<br>';
 echo $jeden->dajTresc().'<br>';
 echo $jeden->dajAutora().'<br>';
 echo $jeden->dajDate_dodania().'<br>';
 echo $jeden->dajWidocznosc().'<br>'; 
}

?>
