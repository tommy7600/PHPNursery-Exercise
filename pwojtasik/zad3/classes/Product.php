<?php

abstract class Product
{
	public $name;
	public $manufacturer;
	public $priceNetto;
	public $priceBrutto;
	public $vat;
	public $quantity;

	public function __construct($name, $manufacturer, $priceNetto, $vat)
	{
		$this->name         = $name;
		$this->manufacturer = $manufacturer;
		$this->priceNetto   = $priceNetto;
		$this->vat          = $vat;
		$this->priceBrutto  = $this->priceNetto * (1+($this->vat/100));
		$this->quantity     = 1;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getManufacurer()
	{
		return $this->manufacturer;
	}

	public function getPriceNetto()
	{
		return $this->priceNetto;
	}

	public function getPriceBrutton()
	{
		return $this->priceBrutto;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}
}