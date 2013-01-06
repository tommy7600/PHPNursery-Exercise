<?php
require_once 'application/configurator.php';
Configurator::configure();

date_default_timezone_set('Europe/Warsaw');

if ((bool)trim(Conf::getInstance()->debbug['show_exceptions'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
