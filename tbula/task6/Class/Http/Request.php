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
        $this->get = $_GET;
        $this->post = $_POST;
        $this->file = $_FILES;
    }
    
    public function Get()
    {
        return $this->get = $_GET;
    }
    
    public function Post()
    {
        return $this->post = $_POST;
    }
    
    public function File()
    {
        return $this->file = $_FILES;
    }
}

?>
