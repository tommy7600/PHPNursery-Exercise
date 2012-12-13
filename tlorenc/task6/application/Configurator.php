<?php

class Configurator
{

    private static $rootPath = null;
    private static $appPath = null;

    public static function configure()
    {
        $r = new ReflectionClass('Configurator');
        self::$rootPath = realpath(dirname($r->getFileName()) . '/..');
        self::$appPath = self::$rootPath . '/application/';

        require_once self::$appPath . 'Loader.php';
        require_once self::$appPath . 'Conf.php';
        self::parseConfig();
    }

    public static function parseConfig()
    {
        $ini = self::$appPath . '/config/config.ini';

        if (file_exists($ini)) {
            $conf = Conf::getInstance();
            $config = parse_ini_file($ini, true);
            foreach ($config as $key => $value) {
                $conf->$key = $value;
            }
        }

    }

    public static function getRootPath()
    {
        return self::$rootPath;
    }

    public static function getAppPath()
    {
        return self::$appPath;
    }

}
