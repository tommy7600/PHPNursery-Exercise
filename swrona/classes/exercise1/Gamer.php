<?php

include_once("Scores.php");

class Gamer
{
    private $_name;
    private $_surname;
    private $_scores;

    public function __construct($name, $surname)
    {
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_scores = new Scores();
    }

    public function __destruct()
    {
        echo "Gamer " . $this->_name . " " . $this->_surname. " has been destroyed.<br>";
    }
    
    public function setScore($score)
    {
        $this->_scores->setScore($score);
    }

    public function addToScore($score)
    {
        $this->_scores->addToScore($score);

        return $this->_scores->getScore();
    }
} 

?>