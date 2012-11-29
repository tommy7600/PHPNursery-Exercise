<?php
/**
 * Klasa abstrakcyjna produkt zawiera podstawowe informacje o produkcie
 */
abstract class Produkt
{
    protected $vat;

    protected $netto;

    protected $nazwa;

    protected $producent;

    protected $ilosc;

    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
    }

    public function getIlosc()
    {
        return $this->ilosc;
    }

    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
    }

    public function getNazwa()
    {
        return $this->nazwa;
    }

    public function setNetto($netto)
    {
        $this->netto = $netto;
    }

    public function getNetto()
    {
        return $this->netto;
    }

    public function setProducent($producent)
    {
        $this->producent = $producent;
    }

    public function getProducent()
    {
        return $this->producent;
    }

    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    public function getVat()
    {
        return $this->vat;
    }


    /**
     * @param $vat
     * @param $netto
     * @param $nazwa
     * @param $producent
     * @param $ilosc
     */
    public function __construct($vat, $netto, $nazwa, $producent, $ilosc)
     {
     	$this->vat = $vat;
        $this->netto = $netto;
        $this->nazwa = $nazwa;
        $this->producent = $producent;
        $this->ilosc = $ilosc;
     }


    /**
     * @return string z nazwą producenta i nazwą produktu
     */
    public function pobierzNazwe()
    {
        return $this->producent.' '.$this->nazwa;
    }

    /**
     * @return zwraca wyliczoną wartość Brutto produktu
     */
    public function pobierzCeneBrutto()
    {
        return $this->netto * $this->vat;
    }

    /**
     * @return pobiera łączną wartość produktów danego obiektu brutto
     */
    public function pobierzLacznaCeneBrutto()
    {
        return $this->pobierzCeneBrutto()*$this->ilosc;
    }

    /**
     * @param $ilosc zwiększa ilość produktu o podaną wartość
     */
    public function zwiekszIlosc($ilosc)
    {
        $this->ilosc += $ilosc;
    }
        
}

?>