<?php
    function __autoload($classname) 
    {
        $classname = str_replace('_', '\\', $classname);
        include("$classname.php");
    }

?>
