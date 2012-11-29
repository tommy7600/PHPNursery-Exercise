<?php

class Punktacja {
  private $punkty;
    
    function __contruct()
    {
        $this->punkty =0;
    }
    function __destruct()
    {
        echo ' Masz '.$this->punkty.' punktów';
    }
    public function pokazIlePunktow()
    {
       return $this->punkty;
    }
    public function dodajPunkty($dodaj)
    {
        if($dodaj<0)
        {
            $dodaj*=-1;
        }
        $this->punkty +=$dodaj;
    }
    public function odejmijPunkty($odejmij)
    {
        if($odejmij<0)
        {
            $odejmij*=-1;
        }
    $this->punkty-=$odejmij;
    }
}

?>
