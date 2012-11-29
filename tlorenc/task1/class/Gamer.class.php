<?php
include_once("Scoring.class.php");
class Gamer
{
    private $_name;
    private $_surname;
    private $_gameScore;


    public function __construct($name, $surname)
    {
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_gameScore = new Scoring();
    }

    public function __destruct()
    {
        $outputScore = $this->_gameScore->__destruct();
        return "Player: " . $this->_name . " " . $this->_surname. " Final score: ".$outputScore;
    }

    public function updatePlayersScore($amount = 0)
    {
        return $this->_gameScore->addScore($amount);
    }
}
