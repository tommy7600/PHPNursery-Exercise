<?php

class Controller {
	
	protected $layout = 'layout';
	protected $request = null;
	protected $response = null;
	
	public function __construct($request, $response)
	{
		$this->view = new View($this->layout);
		$this->view->content = new View($request->controller().DIRECTORY_SEPARATOR.$request->action());
		
		$this->request = $request;
		$this->response = $response;
	}
	
	public function after()
	{
		return $this->view->render();
	}
	
}