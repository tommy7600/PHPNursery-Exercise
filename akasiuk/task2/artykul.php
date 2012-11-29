<?php

class Artykul
{
    private $id;
    private $tytul;
    private $tresc;
    private $autor;
    private $data_dodania;
    private $widocznosc;
    
    function get_id()
    {
        return $this->id;
    }
    
    function set_id($value)
    {
        $this->id = $value;
    }
    
    function get_tytul()
    {
        return $this->tytul;
    }
    
    function set_tytul($value)
    {
        $this->tytul = $value;
    }
    
    function get_tresc()
    {
        return $this->tresc;
    }
    
    function set_tresc($value)
    {
        $this->tresc = $value;
    }
    
    function get_autor() 
    {
        return $this->autor;
    }
    
    function set_autor($value)
    {
        $this->autor = $value;
    }
    
    function get_data_dodania()
    {
        return $this->data_dodania;
    }
    
    function set_data_dodania($value) 
    {
        $this->data_dodania = $value;
    }
   
    function get_widocznosc()
    {
        return $this->widocznosc;
    }
    
    function set_widocznosc($value)
    {
        $this->widocznosc = $value;
    }
   
}