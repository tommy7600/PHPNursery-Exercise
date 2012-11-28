<?php
require_once('koszykItem.php');

class Koszyk
{
    private $produkty;
    
    public dodajProdukt(Produkt $produkt, $ilosc)
    {
        foreach ($this->produkty as $p)
        {
            if ($produkt instanceof $p->get_produkt())
            {
                $p->set_ilosc($p->get_ilosc() + $ilosc);
                
                return;
            }
        }
        
        $this->produkty[] = new KoszykItem($produkt, $ilosc);
    }
    
    public usunProdukt(Produkt $produkt)
    {  
        foreach ($this->produkty as $key => &$p)
        {
            if ($this->produkty[$key]->get_produkt() instanceof $produkt)
            {
                unset($this->produkty[$key]);
                
                break;
            }
        }
    }
    
    public wartoscProduktu(Produkt $produkt)
    {
        foreach ($this->produkty as $p)
        {
            if ($produkt instanceof $p->get_produkt())
            {
                return $p->get_produkt()->get_cenaBrutto() * $p->get_ilosc();
            }
       }
    }
    
    public lacznaIlosc()
    {
        $sum = 0;
        
        foreach ($this->produkty as $p)
        {
            $sum += $p->get_ilosc();
        }
        
        return round($sum, 2);
    }
    
    public lacznaWartosc()
    {
        $sum = 0;
        
        foreach ($this->produkty as $p)
        {
            $sum += $p->get_produkt()->get_cenaBrutto() * $p->get_ilosc();
        }
        
        return round($sum, 2);
    }
}