<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author tbula
 */
class Http_Request
{
    private $get;
    private $post;
    private $file;

    public function __construct()
    {
        $this->get = $this->FiltrInput($_GET);
        $this->post = $this->FiltrInput($_POST);
        $this->file = $_FILES;
    }

    public function Get()
    {
        return $this->get;
    }

    public function Post()
    {
        return $this->post;
    }

    public function File()
    {
        return $this->file;
    }

    private function FiltrInput(array $data)
    {
        foreach ($data as $key => $value)
        {
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

    public static function Factory($className, $method)
    {
        $controller = null;
        
        try
        {
            if (!class_exists($className))
            {
                throw new Exception('Cannot find class ' . $className);
            }

            $class = new ReflectionClass($className);
            if ($class->isAbstract())
            {
                throw new Exception('Canot create instances of abstract ' . $className);
            }

            $controller = $class->newInstance(new Http_Request());
            if (!method_exists($className, 'action_' . $method))
            {
                throw new Exception('Cannot find method ' . $method . ' in class ' . $className);
            }
            if ($class->getMethod('action_' . $method)->isPublic())
            {
                $class->getMethod('action_' . $method)->invoke($controller);
            }
            else
            {
                throw new Exception('Cannot find method ' . $method . ' in class ' . $className);
            }
        }
        catch (Exception $ex)
        {
            $controller = new Controller_Error(new Http_Request());
            $controller->action_index();
        }
        
        return $controller;
    }
}

?>
