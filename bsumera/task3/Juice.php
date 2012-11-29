<?php

class Juice extends AProduct
{
	public function __construct()
	{
		$this->name = 'juice';
		$this->producent = 'Cappy';
		$this->nettoPrice = 4;
		$this->vat = 0.23;
	}
}

?>