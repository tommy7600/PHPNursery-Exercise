<?php

class View
{
    protected $data = array(); 
	protected $view = NULL;
	
    public function __construct($view)
    {
       $this->view = $view;
    }

    public function render()
    {
		extract($this->data);
		
		ob_start();
        include_once ROOTDOC.'view'.DIRECTORY_SEPARATOR.$this->view.'.php';
        $content = ob_get_contents();
        ob_end_clean();
		
		return $content;
	}

    public function __set($key, $value) 
    { 
        $this->data[$key] = $value;
    }

    public function __get($key)
    {
        return array_key_exists($key, $this->data)
            ? $this->data[$key]
            : ''; 
    }

    public function __unset($key)
    {
        unset($this->data[$key]);
    }
	
	public function __toString()
	{
		return $this->render();
	}
	
}