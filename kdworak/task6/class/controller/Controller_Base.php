<?php
    class Controller_Base
    {
        // FIELDS
        private $request;
        private $response;
        
        // constructor.
        public function __construct(Request $request, Response $response) {
            $this->request = $request;
            $this->response = $response;
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