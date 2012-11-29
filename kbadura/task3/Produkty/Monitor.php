<?php
class Monitor extends Produkt
{
	protected $przekatna;

    public function setPrzekatna($przekatna)
    {
        $this->przekatna = $przekatna;
    }

    public function getPrzekatna()
    {
        return $this->przekatna;
    }

    public function __construct($vat, $netto, $nazwa, $producent, $ilosc, $przkatna)
	{
		parent::__construct($vat, $netto, $nazwa, $producent, $ilosc);
		$this->przekatna = $przkatna;
	}   
}

?>