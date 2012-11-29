<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tyskie
 *
 * @author tbula
 */
class Tyskie extends Product
{
    public function __construct() 
    {
        parent::__construct('Tyskie', 'Tyskie', 2.00, Tax::_8);
    }
}

?>
