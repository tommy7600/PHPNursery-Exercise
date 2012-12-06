<?php
    function __autoload($classname) 
    {
        $classname = str_replace('_', '\\', $classname);
//        if(startsWith($classname, 'View'))
//        {
//            include ($classname.'.php');
//        }
//        else
//        {
            include('Class\\'.$classname.'.php');
       // }
    }

    function startsWith($haystack, $needle)
    { 
        return !strncmp($haystack, $needle, strlen($needle));
    }
?>
