<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lech
 *
 * @author tbula
 */
class Lech extends Product 
{
    public function __construct() 
    {
        parent::__construct('Lech', 'Lech', 2.50, Tax::_8 );
    }
    
}

?>
