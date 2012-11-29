<?php

class ShopCart
{
	private $shopCart = array();

	public function addProduct(Product $product)
	{
		if ( ! empty($this->shopCart) )
		{
			if ( in_array($product, $this->shopCart) )
			{
				$product->quantity += 1;
			}
			else
			{
				$this->shopCart[] = $product;
			}
		}
		else
		{
			$this->shopCart[] = $product;
		}
	}

	public function getAll()
	{
		return $this->shopCart;
	}

	public function totalPrice()
	{
		$priceTotal = 0;
		foreach ( $this->shopCart as $key => $value )
		{
			$priceTotal += $value->priceNetto * ( 1+ ( $value->vat/100 ));
		}

		return $priceTotal;
	}

	public function removeProduct($id)
	{
		Validation::isInt($id);

		foreach ( $this->shopCart as $key => $value )
		{
			if ( $key == $id ) 
			{
				unset( $this->shopCart[$key] );
			}
		}
	}

	public function quantity()
	{
		$total = 0;
		
		foreach ( $this->shopCart as $key => $value )
		{
			$total += $value->quantity;
		}

		return $total;
	}
}