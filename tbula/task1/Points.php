<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Points
 *
 * @author tbula
 */
class Points 
{    
     private $points;
     
    public function __construct() 
    {
        $this->points = 0;
    }
    
    public function __destruct() 
    {
        return $this->points;
    }
    
    public function ModifyPoints($points)
    {
        $this->points += $points;
    }
    
    public function GetPoints()
    {
        return $this->points;
    }
}

?>
