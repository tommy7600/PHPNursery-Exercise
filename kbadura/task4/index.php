<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kamil
 * Date: 27.11.12
 * Time: 21:58
 * To change this template use File | Settings | File Templates.
 */
include_once('Matematyka.php');
header('Content-Type: text/html; charset=utf-8');

echo Matematyka::poleKola(25);
echo '<br>';
echo '<br>';
echo Matematyka::obwodKola(25);
echo '<br>';
echo '<br>';
echo Matematyka::funkcjaLiniowa(3,2,4);
echo '<br>';
echo '<br>';
echo Matematyka::funkcjaKwadratowa(2,3,4);
echo '<br>';
echo '<br>';
echo Matematyka::silnia(6);