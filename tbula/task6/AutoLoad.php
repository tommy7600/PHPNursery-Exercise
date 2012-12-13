<?php
    function __autoload($classname) 
    {
        $classname = str_replace('_', '\\', $classname);
        $path = 'Class\\'.$classname.'.php';
        
        if (is_file($path))
        {
            include $path;
        }
        else
        {
            throw new Exception('Cannot find class ' . $classname);
        }
    }
?>
