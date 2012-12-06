<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 12/5/12
 * Time: 2:48 PM
 * To change this template use File | Settings | File Templates.
 */
function classLoader($className){
    $file = 'DAL/'.$className.'.php';
    if (file_exists($file) && is_readable($file) && !class_exists($className, false)){
        require_once($file);
        return;
    }else{
        $file = 'Model/'.$className.'.php';
        if (file_exists($file) && is_readable($file) && !class_exists($className, false)){
            require_once($file);
            return;
        }
        else
        {
            $file = 'Helper/'.$className.'.php';
            if (file_exists($file) && is_readable($file) && !class_exists($className, false))
            {
                require_once($file);
                return;
            }
            else
            {
                throw new Exception('Class cannot be found ( ' . $className . ' )');
            }
        }

    }
}
spl_autoload_register('classLoader');