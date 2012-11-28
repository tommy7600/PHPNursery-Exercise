<?php

abstract class AProduct
{
	protected $name = '';
	protected $producent = '';
	protected $nettoPrice = 0;
	protected $vat = 0;
	
	abstract public function __construct();
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getProducent()
	{
		return $this->producent;
	}
	
	public function getNettoPrice()
	{
		return $this->nettoPrice;
	}
	
	public function getBruttoPrice()
	{
		return $this->nettoPrice * (1+$this->vat);
	}
	
	
}

?>