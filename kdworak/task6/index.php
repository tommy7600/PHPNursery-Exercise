<?php

    function __autoload($className)
    {
        if( file_exists('class/controller/'.$className.'.php' ) ){
            set_include_path('class/controller');
            spl_autoload($className);
        }
        elseif( file_exists('class/http/'.$className.'.php' ) ){
            set_include_path('class/http/');
            spl_autoload($className);
        }elseif( file_exists('view/'.$className.'.php' ) ){
            set_include_path('view');
            spl_autoload($className    );
        }
    }

    $request = new Request();
    $response = new Response($request);
    
    echo '<br><br><br>';
    echo $request->controller;
    echo '<br><br><br>';
    
    $class = new ReflectionClass($request->controller);
    
    // if abstract
    
    $controller = $class->newInstance($request, $response);
    $response = $class->getMethod('execute')->invoke($controller);
    
    //echo $response->body;