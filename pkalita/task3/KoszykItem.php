<?php

class KoszykItem {
    private $quantity;
    private $produkt;
    
    public function __construct(Produkt $prod)
    {
        $this->quantity = 1;
        $this->produkt = $prod;
    }
    public function GetProdukt()
    {
        return $this->produkt;
    }
    
    public function GetQuantity()
    {
        return $this->quantity;
    }
    
    public function ModQuantity($q)
    {
        $this->quantity += $q;
    }
    
    public function GetCenaBrutto()
    {
        return $this->produkt->GetCenaBrutto() * $this->quantity;
    }
}
?>
