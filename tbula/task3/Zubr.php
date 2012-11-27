<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zubr
 *
 * @author tbula
 */
class Zubr extends Product 
{
    public function __construct() 
    {
        parent::__construct('Żubr', 'Tyskie', 1.80, Tax::_23 );
    }
}

?>
