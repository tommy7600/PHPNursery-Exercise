<?php

class Butter extends AProduct
{
	public function __construct()
	{
		$this->name = 'butter';
		$this->producent = 'Pilos';
		$this->nettoPrice = 4;
		$this->vat = 0;
	}
}

?>