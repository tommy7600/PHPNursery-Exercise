<?php
    function __autoload($class_name)
    {
        if (file_exists('classes/' . $class_name . '.php'))
        {
            require 'classes/' . $class_name . '.php';
        }
        
        if (file_exists('classes/Services/' . $class_name . '.php'))
        {
            require 'classes/Services/' . $class_name . '.php';
        }
        
        if (file_exists('classes/Wrappers/' . $class_name . '.php'))
        {
            require 'classes/Wrappers/' . $class_name . '.php';
        }
        
    }