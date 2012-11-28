<?php

class Water extends AProduct
{
	public function __construct()
	{
		$this->name = 'water';
		$this->producent = 'Dobrowianka';
		$this->nettoPrice = 2;
		$this->vat = 0.23;
	}
}

?>