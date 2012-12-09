<?php

class Loader
{
    public static function loadModels($class)
    {
        if (is_readable(Configurator::getAppPath() . "/models/{$class}.php")) {

            require Configurator::getAppPath() . "/models/{$class}.php";
        }
    }

    public static function loadControllers($class)
    {
        if (is_readable(Configurator::getAppPath() . "/controllers/{$class}.php")) {
            require Configurator::getAppPath() . "/controllers/{$class}.php";
        }
    }
}

spl_autoload_register('Loader::loadModels');
spl_autoload_register('Loader::loadControllers');