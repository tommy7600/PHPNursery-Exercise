<?php
    include_once 'AutoLoad.php';
    $url = $_SERVER['REQUEST_URI'];
    if($url == '/')
    {
        $className = 'Controller_Welcome';
        $method = 'index';
    }
    else 
    {
        $url = str_replace('/index.php', '',$url);
        $url = substr($url,1);
        $controllerData = explode('/',$url);
        $paramCount = count($controllerData);
        if($paramCount <2)
        {
            $method ='index';
        }
        else
        {
            $method = $controllerData[1];
        }
        $className = 'Controller_'. $controllerData[0];
    }

    if(!class_exists($className))
    {
      throw new Exception('Cannot find class '.$className);
    }

    $class = new ReflectionClass($className);
    if($class->isAbstract())
    {
        throw  new Exception('Canot create instances of abstract '. $className);
    }

    $controller = $class->newInstance(new Http_Request());
    if(!method_exists($className, 'action_'.$method))
    {
        throw new Exception('Cannot find method '.$method.' in class '.$className);
    }

    $class->getMethod('action_'.$method)->invoke($controller);    

    


