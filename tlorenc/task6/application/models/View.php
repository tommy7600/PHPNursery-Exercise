<?php

class View
{
    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public function __get($prop)
    {
        return '';
    }

    public function render($file)
    {
        ob_start();
        include(dirname(__FILE__) . '/' . $file);
        return ob_get_clean();
    }
}