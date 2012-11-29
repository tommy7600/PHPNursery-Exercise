<?php

class Player
{
	private $score;
	private $name;
	private $surname;
	
	public function __construct($name, $surname)
	{
		$this->score = new Score();
		$this->name = $name;
		$this->surname = $surname;
	}
	
	public function updateScore($score)
	{
		$this->score = $score;
	}
	
	public function __destruct()
	{
		return $this->name." ".$this->surname;
	}
}


?>