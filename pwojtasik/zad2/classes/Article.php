<?php

class Article
{
	public $article;

	public function __set($name, $value)
	{
	    $this->article[$name] = $value;
	    return $this;
	}

	public function __get($name) 
	{
		if (array_key_exists($name, $this->article)) {
	        return $this->article[$name];
	    } 
	    else
	    {
	        return FALSE;
	    }
	}
}