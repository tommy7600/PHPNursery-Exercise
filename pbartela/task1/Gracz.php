<?php
include 'Punktacja.php';

class Gracz {
    
    private $punkty;
    private $imie;
    private $nazwisko;
    
    function __construct($imie, $nazwisko)
    {
        $this->imie=$imie;
        $this->nazwisko=$nazwisko; 
        $this->punkty = new Punktacja;
    }
    
    
    
    public function dodajPunkty($punkt)
    {
        $this->punkty->dodajPunkty($punkt);
    }
    
    public function odejmijPunkty($punkt)
    {
        $this->punkty->odejmijPunkty($punkt);
    }
    function __destruct()
    {
    echo 'Nazywasz sie '.$this->imie.' '.$this->nazwisko;
    }
}

?>
