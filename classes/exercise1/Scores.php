<?php

class Scores
{
    private $_score;

    public function __construct()
    {
        $this->_score = 0;
    }

    public function __destruct()
    {
        echo "Final score: " . $this->_score . "<br>";
    }
    
    public function getScore()
    {
        return $this->_score;
    }

    public function setScore($score)
    {
        $this->_score = $score;
    }

    public function addToScore($score)
    {
        $this->_score += $score;

        return $this->_score;
    }
}
 
?>