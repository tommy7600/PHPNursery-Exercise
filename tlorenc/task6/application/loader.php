<?php

class Loader
{
    public static function loadModels($class)
    {
        $class = strtolower($class);
        if (is_readable(Configurator::getAppPath() . "/models/{$class}.php")) {

            require Configurator::getAppPath() . "/models/{$class}.php";
        }
    }

    public static function loadControllers($class)
    {
        $class = strtolower($class);
        if (is_readable(Configurator::getAppPath() . "/controllers/{$class}.php")) {
            require Configurator::getAppPath() . "/controllers/{$class}.php";
        }
    }

    public static function exceptionHandler(Exception $exception)
    {
        $conf = Conf::getInstance();
        if ((bool)trim($conf->debbug['show_exceptions']))
            echo "Exception message: ", $exception->getMessage(), "\n";
        else
            header("Location: " . $conf->main['web_folder'] . "error");
    }
}

spl_autoload_register('Loader::loadModels');
spl_autoload_register('Loader::loadControllers');
set_exception_handler('Loader::exceptionHandler');