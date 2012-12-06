<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author tbula
 */
class Controller_BaseController
{
    protected $response;
    protected $request;
    
    public function __construct(Http_Request $request)
    {
        $this->request = $request;
        $this->response = new Http_Response();
    }
    
}

?>
