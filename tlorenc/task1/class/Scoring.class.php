<?php

class Scoring
{
    public $score;

    public function __construct()
    {
        $this->score = 0;
    }

    public function __destruct()
    {
        return $this->score;
    }

    function addScore($amount = 0)
    {
        $this->score += $amount;

        if ($this->score > 0) {
            return $this->score;
        }
        return $this->score = 0;
    }

    function showScore($amount = 0)
    {
        return $this->score;
    }
}

