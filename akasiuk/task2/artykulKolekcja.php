<?php

require_once("artykul.php");

class ArtykulKolekcja
{
    private $artykuly;
    
    function dodaj($artykul)
    {
        $this->artykuly[] = $artykul;
    }
    
    function usun($id)
    {
        for ($i = count($this->artykuly) - 1; $i >= 0; --$i)
        {
            if ($this->artykuly[$i]->get_id() == $id)
            {
                unset($this->artykuly[$i]);
            }
        }
        
        $this->artykuly = array_values($this->artykuly);
    }
    
    function pobierz_wszystko()
    {
        return $this->artykuly;
    }
}