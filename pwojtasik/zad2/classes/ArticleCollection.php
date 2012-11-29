<?php

class ArticleCollection
{
	public $collection = array();

	public function add(Article $article)
	{
		$this->collection[] = $article;
	}

	public function showAll()
	{
		return $this->collection;
	}

	public function removeCollection($id)
	{
		Validation::isInt($id);
		unset( $this->collection[$id] );
	}
}