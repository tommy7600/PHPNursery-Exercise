<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author tbula
 */
class Model_Email
{
    private $address;
    private $subject;
    private $content;
    private $signature;
    
    public function SetAddress($address)
    {
        $address = trim($address);
        if(is_string($address) && filter_var($address, FILTER_VALIDATE_EMAIL))
        {
            $this->address = trim($address);
        }
        else
        {
            throw new Exception('Email is not valid');
        }
    }
    
    public function GetAddress()
    {
        return $this->address;
    }
    
    public function SetSubject($subject)
    {
        $subject = trim($subject);
        if(is_string($subject) && $subject !='')
        {
            $this->subject = $subject;
        }
        else
        {
            throw  new Exception('Subject is required');
        }
    }
    
    public function GetSubject()
    {
        return $this->subject;
    }
    
    public function SetContent($content)
    {
        $content = trim($content);
        if(is_string($content) && $content !='')
        {
            $this->content = $content;
        }
        else
        {
            throw  new Exception('Content is required');
        }
    }
    
    public function GetContent()
    {
        return $this->content;
    }
    
    public function SetSignature($signature)
    {
        $signature = trim($signature);
        if(is_string($signature) && $signature !='')
        {
            $this->signature = $signature;
        }
        else
        {
            throw  new Exception('Signature is required');
        }
    }
    
    public function GetSignature()
    {
        return $this->signature;
    }
}

?>
