<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Response
 *
 * @author tbula
 */
class Http_Response
{
    private $content;
    private $headers;
    
    public function __construct()
    {
        $this->headers = array();
    }
    
    public function Body($body)
    {
        $this->content = $body;
    }
    
    public function SetHeader($header)
    {
        $this->headers[] = $header;    
    }
    
    public function __toString()
    {
        foreach ($this->headers as $header)
        {
            header($header);
        }
        
        return $this->content;
    }
}

?>
