<?php

class FrontController
{
    protected $_controller;
    protected $_action;
    protected $_params = array();
    protected $_body;

    private static $_instance;

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct()
    {
        $conf = Conf::getInstance();

        $request = $_SERVER['REQUEST_URI'];

        $startArr = explode('/', trim($conf->main['web_folder'], '/'));
        $startInx = count($startArr);

        $splits = explode('/', trim($request, '/'));


        $this->_controller = !empty($splits[$startInx]) ? $splits[$startInx] : 'index';
        $this->_action = !empty($splits[$startInx + 1]) ? $splits[$startInx + 1] : 'index';

        if (!empty($splits[$startInx + 2])) {
            $keys = $values = array();
            for ($idx = $startInx + 2, $cnt = count($splits); $idx < $cnt; $idx++) {
                if ($idx % 2 == 0) {
                    //Is even, is key
                    $keys[] = $splits[$idx];
                } else {
                    //Is odd, is value;
                    $values[] = $splits[$idx];
                }
            }

            if (count($keys) < count($values)) {
                $keys[] = '';
            }
            $this->_params = array_combine($values, $keys);
        }
    }

    public function route()
    {
        if (class_exists($this->getController())) {
            $rc = new ReflectionClass($this->getController());

            if ($rc->implementsInterface('IController')) {
                //var_dump($this->getAction());
                if ($rc->hasMethod($this->getAction())) {
                    $controller = $rc->newInstance();
                    //var_dump($controller);
                    $method = $rc->getMethod($this->getAction());
                    //var_dump($method);
                    $method->invoke($controller);
                } else {
                    throw new Exception('Action');
                }
            } else {
                throw new Exception("Interface");
            }
        } else {
            throw new Exception("Controller");
        }
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function getAction()
    {
        return $this->_action;
    }

    public function getBody()
    {
        return $this->_body;
    }

    public function setBody($body)
    {
        $this->_body = $body;
    }
}
