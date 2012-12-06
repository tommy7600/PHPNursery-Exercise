<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewFactory
 *
 * @author tbula
 */
class Model_Factory
{
    public static function GetViews()
    {
        return array('News'=>1,
                    'Gallery'=>0,
                    'Files'=>0,
                    'Contact'=>0,
                    'AboutUs'=>0);
    }
}

?>
