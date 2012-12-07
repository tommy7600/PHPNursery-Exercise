<?php
    class Controller_Welcome
    {
        // FIELDS
        private $request;
        private $response;
        
        public function __construct(Request $request, Response $response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        public function Action_Welcome()
        {
            $view = new CustomView('Welcome'); 
            $view->render();
        }
        
        // execute function.
        public function execute()
        {
            $action = $this->request->action;
            if(!method_exists($this, $action))
            {
                throw new Exception('method not found');
            }
            
            $this->{$action}();
            return $this->response;
        }
    }