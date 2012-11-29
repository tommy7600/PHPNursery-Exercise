<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Warka
 *
 * @author tbula
 */
class Warka extends Product
{
    public function __construct() 
    {
        parent::__construct('Warka', 'Lech', 2.10, Tax::_0 );
    }
}

?>
