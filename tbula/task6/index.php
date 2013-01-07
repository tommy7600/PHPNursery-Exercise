<?php

include_once 'AutoLoad.php';

$url = $_SERVER['REQUEST_URI'];
$url = str_replace(array($_SERVER['QUERY_STRING'], '?'), '', $url);

if ($url == '/')
{
    $className = 'Controller_News';
    $method = 'index';
}
else
{
    $url = str_replace('/index.php', '', $url);
    $url = substr($url, 1);
    $controllerData = explode('/', $url);
    $paramCount = count($controllerData);
    if ($paramCount < 2)
    {
        $method = 'index';
    }
    else
    {
        $method = $controllerData[1];
    }

    $className = 'Controller_' . $controllerData[0];
}

echo Http_Request::Factory($className, $method)->body();