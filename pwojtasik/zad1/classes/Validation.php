<?php

class Validation
{

	public static function isInt($value)
	{
		if ( is_array($value) )
		{
			if ( array_filter( $value, 'is_int' ) !== $value )
				throw new Exception('Array does contain other values than int');
		}
		elseif ( ! is_int($value) )
			throw new Exception($value.' is not an int!');
		else
			return TRUE;
	}

}