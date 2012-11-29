<?php

class ArticleCollection
{
	private $collection = array();
	
	public function add(Article $article)
	{
		$this->collection[] = $article;
	}
	
	public function subtract($id)
	{
		unset($this->collection[$id]);
		$this->collection = array_values($this->collection);
	}
	
	public function getAll()
	{
		return $this->collection;
	}
}

?>