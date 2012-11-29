<?php
header('Refresh: 1');
include 'Matematyka.php';

    $obliczenia = Matematyka::fKwadrartowa(4,33,4,3);
    echo $obliczenia;
    $obliczenia1 = Matematyka::fLiniowa(3, 11, 45, 54,3);
    echo $obliczenia1;
    $obliczenia2 = Matematyka::obwodKola(3,3);
    echo $obliczenia2;
    $obliczenia3 = Matematyka::poleKola(3);
    echo $obliczenia3;

?>
