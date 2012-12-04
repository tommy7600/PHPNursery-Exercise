<?php

if (!defined('INCLUDED'))
{
    die();
}

function autoloader($class)
{
    require 'classes/' . $class . '.php';
}
spl_autoload_register('autoloader');