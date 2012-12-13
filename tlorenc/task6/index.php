<?php
require_once 'application/Configurator.php';
$configurator = Configurator::configure();

$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
