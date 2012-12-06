<?php

class FrontController {

    protected $_controller, $_action, $_params, $_body;

    static $_instance;

    public static function getInstance() {
        if( ! (self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        $request = $_SERVER['REQUEST_URI'];

        $splits = explode('/', trim($request,'/task6/'));  // To Do" Zmienić to!!! Może plik konfiguracyjny?
        $this->_controller = !empty($splits[0])?$splits[0]:'index';
        $this->_action = !empty($splits[1])?$splits[1]:'index';
        if(!empty($splits[2])) {
            $keys = $values = array();
            for($idx=2, $cnt = count($splits); $idx<$cnt; $idx++) {
                if($idx % 2 == 0) {
                    $keys[] = $splits[$idx];
                } else {
                    $values[] = $splits[$idx];
                }
            }
            $this->_params = array_combine($keys, $values);
        }
    }

    public function route() {
       // echo "1 "; var_dump(class_exists($this->getController()));
        if(class_exists($this->getController())) {
          //  echo "2 "; var_dump($this->_controller);
            $rc = new ReflectionClass($this->getController());
           // echo "3 "; var_dump($rc);
            if($rc->implementsInterface('IController')) {
                if($rc->hasMethod($this->getAction())) {
                    $controller = $rc->newInstance();
                    $method = $rc->getMethod($this->getAction());
                    $method->invoke($controller);
                } else {
                    throw new Exception("Action");
                }
            } else {
                throw new Exception("Interface");
            }
        } else {
            throw new Exception("Controller");
        }
    }

    public function getParams() {
        return $this->_params;
    }

    public function getController() {
        return $this->_controller;
    }

    public function getAction() {
        return $this->_action;
    }

    public function getBody() {
        return $this->_body;
    }

    public function setBody($body) {
        $this->_body = $body;
    }

}