<?php
    class Koszyk 
    {
        private $koszykItems;

        public function __construct()
        {
            $this->koszykItems = array();
        }

        public function AddProdukt(Produkt $produkt)
        {
            if(isset($this->koszykItems[$produkt->GetNazwa()]))
            {
                $this->koszykItems[$produkt->GetNazwa()]->ModQuantity(1);    
            }
            else
            {
                $this->koszykItems[$produkt->GetNazwa()] = new KoszykItem($produkt);
            }
        }
        
        public function AddProductQuaintity($quantity, Produkt $product)
        {
            if(isset($this->koszykItems[$product->GetNazwa()]))
            {
                $this->koszykItems[$product->GetNazwa()]->ModQuantity($quantity);    
            }
            else
            {
                $this->koszykItems[$product->GetNazwa()] = new KoszykItem($product);
                $this->koszykItems[$product->GetNazwa()]->ModQuantity($quantity-1);
            }
        }
        
        public function RemoveProduct($quantity, Produkt $product)
        {
            if(isset($this->koszykItems[$product->GetNazwa()]))
            {
                if($this->koszykItems[$product->GetNazwa()]->GetQuantity() <= $quantity)
                {
                    unset($this->koszykItems[$product->GetNazwa()]);
                }
                else
                {
                    $this->koszykItems[$product->GetNazwa()]->ModQuantity(-$quantity);
                }
                 
            }
        }
        
        public function ListAll()
        {
            echo '<table border="Black">';
            echo '<tr>';
                echo '<td>Nazwa</td>';
                echo '<td>Ilosc</td>';
                echo '<td>Cena</td>';
            echo '</tr>';
            foreach($this->koszykItems as $koszykIt)
            {
                echo '<tr>';
                echo '<td>'.$koszykIt->GetProdukt()->GetNazwa().'</td>';
                echo '<td>'.$koszykIt->GetQuantity().'</td>';
                echo '<td>'.$koszykIt->GetCenaBrutto().'</td>';
                echo '</tr>';
            }
            
            echo '</table>';
        }
    }
?>