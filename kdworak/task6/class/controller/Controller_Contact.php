<?php
    class Controller_Contact
    {
        
        // FIELDS
        private $request;
        private $response;
        
        public function __construct(Request $request, Response $response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        public function WelcomeAction()
        {
            
        }
        
        public function execute()
        {
            $action = $this->request->Action();
            if(!method_exists($this, $action))
            {
                throw new Exception('method not found');
            }
            
            $this->{$action}();
            return $this->response;
        }
    }