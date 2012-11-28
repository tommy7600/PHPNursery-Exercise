<?php

class Chocolate extends AProduct
{
	public function __construct()
	{
		$this->name = 'chocolate';
		$this->producent = 'Milka';
		$this->nettoPrice = 8;
		$this->vat = 0.08;
	}
}

?>