<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Player
 *
 * @author tbula
 */
class Player 
{    
    private $point;
    
    public $firstName;
    public $secondName;
    
    public function __construct($firstName, $secondNamed) 
    {
        $this->point = new Points();
        $this->firstName = $firstName;
        $this->secondName = $secondNamed;
    }
    
    public function __destruct() 
    {
        return $this->firstName.' '.$this->secondName;
    }
    
    public function ModifyPoints($points)
    {
        $this->point->ModifyPoints($points);
    }
    
    public function GetPoints()
    {
        return $this->point->GetPoints();
    }
}

?>
