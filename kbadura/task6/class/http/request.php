<?php

class HTTP_Request {
	
	protected $controller = NULL;
	protected $action = NULL;
    public $post;


    function __construct()
    {
        $this->post = $_POST;
    }

    public function getUrl()
	{
		$uri = $_SERVER['REQUEST_URI'];
		$uri = trim($uri, '/');
		
		return $uri;
	}

	public function controller($controller = NULL)
	{
		if ($controller === NULL)
		{
			return $this->controller;
		}
		
		return $this->controller = $controller;
	}
	
	public function action($action = NULL)
	{
		if ($action === NULL)
		{
			return $this->action;
		}
		
		return $this->action = $action;
	}
}