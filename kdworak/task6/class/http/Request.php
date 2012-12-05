<?php
    class Request
    {
        // FIELDS
        private $controller;
        private $action;
        private $parameters;

        // constructor.
        public function __construct()
        {
            $this->_parseUri();
        }
        
        // getters.
        public function __get($name) {
            return $this->$name;
        }
        
        // setters.
        public function __set($name, $value) {
            $this->$name = $value;
        }

        // parsing.
        private function _parseUri()
        {
            $part = str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

            $chunks = explode('/', $part);
            $chunks = array_filter($chunks);

            
                $this->controller = ($this->controller = array_shift($chunks)) ? 
                        $this->controller = 'Controller_' . ucfirst(strtolower($this->controller)) :
                        'Controller_Welcome';

                $this->action = ($this->action = array_shift($chunks)) ?
                        $this->action = 'Action_' . ucfirst(strtolower($this->action)) :
                        'Action_Welcome';

                $this->parameters = $chunks ? $chunks : null;
        }
    }