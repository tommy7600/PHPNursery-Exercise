<?php
    include 'loader.php';

    $request = new Request();
    $response = new Response($request);
    $class = new ReflectionClass($request->controller);
    if($class->isAbstract())
    {
        throw new Exception("Cannot create instance of abstract class!");
    }
    
    
    
    
    $controller = $class->newInstance($request, $response);
    $response = $class->getMethod('execute')->invoke($controller);