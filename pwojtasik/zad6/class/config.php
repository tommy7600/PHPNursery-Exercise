<?php

class Config
{
    public static function get( $file )
    {
        if (file_exists(BASEDIR.'config'.DIRECTORY_SEPARATOR.$file.'.php') )
        {
            return include_once BASEDIR.'config'.DIRECTORY_SEPARATOR.$file.'.php';
        }
        else
        {
            throw new Exception('File does not exist');
        }
    }
}