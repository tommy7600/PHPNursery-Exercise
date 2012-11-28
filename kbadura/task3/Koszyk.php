<?php
/**
 *
 */
class Koszyk
{
    protected $produkty;
    
    public function __construct()
    {
        $this->produkty = array();
    }

    /**
     * @param Produkt $produkt produkt który zostanie dodany do koszyka
     * @param $id id pod którym zostanie dodany do koszyka
     */
    public function dodajProduktDoKoszyka(Produkt $produkt, $id)
    {
        $this->produkty[$id] = $produkt;
    }

    /**
     * @param $id id produktu do usuniecia z koszyka
     */
    public function usunZkoszyka($id)
    {
        unset($this->produkty[$id]);
    }

    /**
     * @param $id id przedmiotu w koszyku
     * @param $ilosc ilosć o jaką należ zwiększyć produkt w koszyku
     */
    public function zwiekszIloscProduktu($id, $ilosc)
    {
        $this->produkty[$id]->zwiekszIlosc($ilosc);
    }

    /**
     * @param $id id produktu w koszyku
     * @return string zwraca sformatowany tekst z nazwą produktu i jego ceną
     */
    public function pobierzWartoscProduktu($id)
    {
        return $this->produkty[$id]->pobierzNazwe().': '.$this->produkty[$id]->pobierzLacznaCeneBrutto().' zł';
    }

    /**
     * @return string zwraca tekst z wyliczoną wartością brutto koszyka
     */
    public function pobierzLacznaWartoscKoszyka()
    {
        $lacznaWartos = 0.0;
        foreach($this->produkty as $key => $val)
        {
            $lacznaWartos += $val->pobierzLacznaCeneBrutto();
        }

        return 'Łączna wartość koszyka: '.$lacznaWartos;
    }

    /**
     * @return string pobiera sformatowany tekst z zawartością koszyka
     */
    public function wyswietlCalyKoszyk()
    {
        $zawartoscKoszyka = '';
        foreach($this->produkty as $key => $val)
        {
            $zawartoscKoszyka .=$val->pobierzNazwe().'; ilość: '.$val->getIlosc().'; cena brutto: '.$val->pobierzLacznaCeneBrutto().'<br>';
        }
        return $zawartoscKoszyka;
    }

    function __destruct()
    {
        unset($this->produkty);
    }



}

?>