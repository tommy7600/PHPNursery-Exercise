<?php

define('BASEDIR', __DIR__.DIRECTORY_SEPARATOR);
define('EXTERNALS', BASEDIR.'ext'.DIRECTORY_SEPARATOR);

define('ENV_DEV', 10);
define('ENV_TEST', 20);
define('ENV_PROD', 30);

date_default_timezone_set('Europe/Warsaw');

if (strpos($_SERVER['HTTP_HOST'], 'local') !== FALSE)
{
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$env = ENV_DEV;
}
else if (strpos($_SERVER['HTTP_HOST'], 'www.strona.pl') !== FALSE)
{	
	error_reporting(0);
	ini_set('display_errors', 0);
	
	$env = ENV_PROD;
}
else 
{
	exit('Giń!');
}

function autoload($class)
{
	$path = BASEDIR.'class'.DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, strtolower($class)).'.php';
	
	if ( ! is_file($path))
	{
		throw new Exception('Class not exists - '.$class);
	}
	
	include $path;
}
spl_autoload_register('autoload');

include EXTERNALS.'swift/lib/swift_required.php';

echo Base::initialize(new Http_Request(), new Http_Response());