<?php

require_once("punktacja.php");

class Gracz
{
    private $firstName;
    private $lastName;
    private $points;
    
    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->points = new Punktacja();
    }
    
    function addPoints($value)
    {
        $this->points->addPoints($value);
    }
    
    function __destruct()
    {
        echo $this->firstName . ' ' . $this->lastName . "\n";
    }    
}