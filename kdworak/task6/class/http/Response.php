<?php
    class Response
    {
        // fields.
        private $header;
        private $body;
        private $request;
        
        // constructor.
        public function __construct($request) 
        {
            $this->request = $request;
        }
        
        public function __get($name) {
            return $this->$name;
        }
        
        public function send()
        {
            
        }
        
    }