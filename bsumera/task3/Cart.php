<?php

class Cart
{
	private $products = array();
	private $amount;
	
	function addProduct(AProduct $product, $amount = null)
	{	
		if ($amount == null OR (int)$amount < 1)
		{
			$this->products[$product] = 1;     				///  Warning: Illegal offset type on line 8
			$this->updateAmount(1);
		}
		else
		{
		    $this->products[$product] = (int)$amount;
			$this->updateAmount((int)amount);
		}
	}
	
	public function deleteProduct(AProduct $product)
	{
		$this->updateAmount($this->products[$product]*(-1));
		unset($this->products[$product]);
	}
	
	public function changeProductAmount(AProduct $product, $amount)
	{
		if ($amount == null OR (int)$amount < 1)
		{
			echo 'Incorrect value!';
		}
		else
		{
			$this->updateAmount((int)$amount - $this->products[$product]);
			$this->products[$product] = (int)$amount;
		}
	}
	
	public function updateAmount($amount)
	{
		$this->amount += $amount;
	}
	
	public function getProductsAmount()
	{
		return $this->amount;
	}
	
	public function getProductAmount(AProduct $product)
	{
		return $this->products[$product];
	}
}

?>