<?php

class Article
{
	private $id;
	private $title;
	private $content;
	private $autor;
	private $additionalDate;
	private $visibility;
	
	//setters with fluent interface using possibility
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	
	public function setAutor($autor)
	{
		$this->autor = $autor;
		return $this;
	}
	
	public function setAdditionalDate($additionalDate)
	{
		$this->additionalDate = $additionalDate;
		return $this;
	}
	
	public function setVisibility($visibility)
	{
		$this->visibility = $visibility;
		return $this;
	}
	
	//getters
	public function getId($id)
	{
		$this->id = $id;
	}
	
	public function getTitle($title)
	{
		$this->title = $title;
	}
	
	public function getContent($content)
	{
		$this->content = $content;
	}
	
	public function getAutor($autor)
	{
		$this->autor = $autor;
	}
	
	public function getAdditionalDate($additionalDate)
	{
		$this->additionalDate = $additionalDate;
	}
	
	public function getVisibility($visibility)
	{
		$this->visibility = $visibility;
	}
}

?>