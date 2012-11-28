<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 12:44 PM
 * To change this template use File | Settings | File Templates.
 */
include("Gracz.php");

$gracz = new Gracz('Kamil', 'Badura');
$gracz->aktualizujPunktacje(1);
$gracz->aktualizujPunktacje(1);
$gracz->aktualizujPunktacje(-1);
$gracz->aktualizujPunktacje(5);
unset($gracz);
