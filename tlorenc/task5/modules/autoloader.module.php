<?php
function classLoader($className)
{
    $file = 'classes/' . $className . '.class.php';
    if (file_exists($file) && is_readable($file) && !class_exists($className, false)) {
        require_once($file);
    } else {
        throw new Exception('Class cannot be found ( ' . $className . ' )');
    }
}

spl_autoload_register('classLoader');