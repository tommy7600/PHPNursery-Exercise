<?php


class Artykul {
    
    private $id;
    private $tresc;
    private $data_dodania;
    private $autor;
    private $widocznosc;
    
    
    public function dajID()
    {
        return $this->id;
    }
    public function dajTresc()
    {
        return $this->tresc;
    }
    public function dajAutora()
    {
        return $this->autor;
    }
    public function dajDate_Dodania()
    {
        return $this->data_dodania;
    }
    public function dajWidocznosc()
    {
        return $this->widocznosc;
    }
    
    public function ustawID($id)
    {
        $this->id = $id;
        return $this;    
    }
    public function ustawTresc($tresc)
    {
        $this->tresc = $tresc;
        return $this;    
    }
    public function ustawAutora($autor)
    {
        $this->autor = $autor;
        return $this;    
    }
    public function ustawDate_Dodania($data)
    {
        $this->data_dodania = $data;
        return $this;    
    }
    public function ustawWIdocznosc($widocznosc)
    {
        $this->widocznosc = $widocznosc;
        return $this;    
    }
}

?>
