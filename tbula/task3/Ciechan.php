<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ciechan
 *
 * @author tbula
 */
class Ciechan extends Product
{
    public function __construct() 
    {
        parent::__construct('Ciechan', 'Ciechan', 3.50, Tax::_8 );
    }
}

?>
