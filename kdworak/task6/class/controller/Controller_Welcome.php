<?php
    class Controller_Welcome
    {
        
        // FIELDS
        private $request;
        private $response;
        
        public function __construct(Request $request, Response $response) {
            $this->request = $request;
            $this->response = $response;
            echo 'TTTTTTT';
        }
        
        public function Action_Welcome()
        {
            echo 'WELCOME!!!';
            
            $x = '####################';
            
            //include 'view/Welcome.php';
            
            $view = new CustomView();
            array_push($view->data, $x);
            $view->render();
            
            
        }
        
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