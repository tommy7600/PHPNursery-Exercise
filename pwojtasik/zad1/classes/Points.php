<?php

class Points
{
	private $points;

	public function __construct()
	{
		$this->points = 0;
	}

	public function addPoints($points)
	{
		echo "Adding $points points.\n";
		$this->points += $points;
		return $this;
	}

	public function removePoints($points)
	{
		echo "Removing $points points. \n";
		$this->points -= $points;
		return $this;
	}

	public function getPoints()
	{
		return $this->points;
	}

	public function __destruct()
	{
		return $this->getPoints();
	}
}