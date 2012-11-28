<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$player = new Player('Patryk', 'Wojtasik');
try
{
	$player->addPoints(20);
	$player->removePoints(10);
	echo 'Now got '.$player->points->getPoints().' points. ';
	unset($player);
}
catch (Exception $e)
{
	echo $e->getMessage();
}