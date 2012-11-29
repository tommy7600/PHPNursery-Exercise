<?php

class Player
{
	public $points;
	public $fname;
	public $lname;

	public function __construct($fname, $lname)
	{
		$this->points = new Points();
		$this->fname  = $fname;
		$this->lname  = $lname;
	}

	public function addPoints($points)
	{
		Validation::isInt($points);
		$this->points->addPoints($points);
		return $this;
	}

	public function removePoints($points)
	{
		Validation::isInt($points);
		$this->points->removePoints($points);
		return $this;
	}

	public function __destruct()
	{
		echo $this->fname.' '.$this->lname;
	}
}