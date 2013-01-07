<?php

class View
{
    protected $data = array();

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    public function __get($prop)
    {
        return array_key_exists($prop, $this->data)
            ? $this->data[$prop]
            : '';
    }

    public function render($file)
    {
        extract($this->data);

        ob_start();
        include(dirname(__FILE__) . '/' . $file);
        return ob_get_clean();
    }
}