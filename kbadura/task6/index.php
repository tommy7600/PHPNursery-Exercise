<?php

define('ROOTDOC', __DIR__.DIRECTORY_SEPARATOR);

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

function __autoload($class)
{
	$path = ROOTDOC.'class'.DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, strtolower($class)).'.php';
	
	if ( ! is_file($path))
	{
		throw new Exception('Class not exists - '.$class);
	}
	
	include $path;
}

$request = new HTTP_Request;
$response = new HTTP_Response;


$url = $request->getUrl();

$parts = explode('/', $url);

// Kontroler
$controller = isset($parts[1])
	? $parts[1] : 'wellcome';

// Akcja
$action = isset($parts[2])
	? $parts[2] : 'index';
	
$request->controller($controller);
$request->action($action);

try
{
	$class = new ReflectionClass('Controller_'.$controller);

	if ($class->isAbstract())
	{
	  throw new Exception('Cannot create instances of abstract');
	}

	$controller = $class->newInstance($request, $response);
	$response = $class->getMethod('action_'.$action)->invoke($controller);
	echo $class->getMethod('after')->invoke($controller);
}
catch (Exception $e)
{
	echo $e->getMessage();
}