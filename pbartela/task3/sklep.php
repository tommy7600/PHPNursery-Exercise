 <?php
 
class sklep {
  
    private $koszyk;
    
    function __construct()
    {
        $this->koszyk=array();
    }
    
    public function dodajProdukt(produkt $prod)
    {
        array_push($this->koszyk, $prod);
     
    }
    
    public function dajProdukty()
    {
       
       return $this->koszyk;
    }
}

?>
