<?php

class Punktacja
{
    private $points;

    function __construct()
    {
        $this->points = 0;
    }
    
    function addPoints($value)
    {
        $this->points += $value;
    }
    
    function __destruct()
    {
        echo 'Punkty: ' . $this->points . "\n";
    }
}