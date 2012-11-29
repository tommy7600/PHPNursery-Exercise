<?php

class Artykul {
    private $id;
    private $tytul;
    private $tresc;
    private $autor;
    private $data_dodania;
    private $widocznosc;
    
    // <editor-fold defaultstate="collapsed" desc="Setters">
    public function SetId($val)
    {
        $this->id = $val;
        return $this;
    }
    
    public function SetTytul($val)
    {
        $this->tytul = $val;
        return $this;
    }
    
    public function SetTresc($val)
    {
        $this->tresc = $val;
        return $this;
    }
    
    public function SetAutor($val)
    {
        $this->autor = $val;
        return $this;
    }
    
    public function SetData($val)
    {
        $this->data_dodania = $val;
        return $this;
    }
    
    public function SetWidocznosc($val)
    {
        $this->widocznosc = $val;
        return $this;
    }
    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function GetId()
    {
        return $this->id;
    }
    
    public function GetTytul()
    {
        return $this->tytul;
    }
    
    public function GetTresc()
    {
        return $this->tresc;
    }
    
    public function GetAutor()
    {
        return $this->autor;
    }
    
    public function GetData()
    {
        return $this->data_dodania;
    }
    
    public function GetWidocznosc()
    {
        return $this->widocznosc;
    }
    // </editor-fold>
   
    //tak sie nie robi, ale tylko w tym przykladzie zrobilem
    public function ShowWholeArticle()
    {
        echo 'Tytul: '. $this->tytul . '<br>';
        echo 'Autor: '. $this->autor . '<br>';
        echo 'Tresc: '. $this->tresc . '<br>';
        echo 'Data: '. $this->data_dodania . '<br>';
    }
}

?>
