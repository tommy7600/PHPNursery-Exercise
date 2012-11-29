<?php

class Milk extends AProduct
{
	public function __construct()
	{
		$this->name = 'milk';
		$this->producent = 'Pilos';
		$this->nettoPrice = 2;
		$this->vat = 0.08;
	}
}

?>