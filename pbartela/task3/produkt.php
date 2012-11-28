 <?php
include 'lizak.php';
include 'ser.php';
include 'monitor.php';
include 'zelki.php';
include 'beton.php';

abstract class produkt {
 
    private $nazwa;
    private $producent;
    private $netto;
    private $brutto;
    private $vat;
    private $ilosc;
    
    function __construct($nazwa,$producent,$netto,$ilosc =1)
    {
        $this->nazwa=$nazwa;
        $this->producent=$producent;
        $this->netto=$netto;
        $this->ilosc = $ilosc;
    }
    
    public function dajNazwe()
    {
        return $this->nazwa;
    }
    public function dajProducenta()
    {
        return $this->producent;
    }
    public function dajNetto()
    {
        return $this->netto;
    }
    
     public function dajNettoWszystkich()
    {
         if(!isset($this->netto))
        {
             dajNetto();
        }
        return $this->netto*$this->ilosc;
    }
    
    public function dajBrutto()
    {
        if(!isset($this->brutto))
        {
            if(isset($this->netto))
            {
                if(isset($this->vat))
                {
                    $this->brutto=$this->netto+($this->netto*($this->vat/100));
                }
                else
                {
                  echo 'Nie ustawiłeś vat.';
                }
            }
            else
            {
               echo 'Nie ustawiłeś netto.';
            }
        }        
       return $this->brutto;
        
    }
    
    public function dajBruttoWszystkich()
    {
        if(!isset($this->brutto))
        {
            dajBrutto();
        }        
       return $this->brutto*$this->ilosc;
        
    }
    
    public function dajVat()
    {
        
        return $this->vat;
    }
    public function ustaw0Vat()
    {
        $this->vat = 0;
    }
     public function ustaw8Vat()
    {
        $this->vat = 8; 
        
    }
     public function ustaw23Vat()
    {
        $this->vat = 23;
    }
    public function ustawIlosc($ilosc)
    {
        $this->ilosc=$ilosc;
    }
    public function dajIlosc()
    {
        return $this->ilosc;
    }
//    public function ustawBrutto()
//    {
//        
//    }
    
   
    
}

?>
