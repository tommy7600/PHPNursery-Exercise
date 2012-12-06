<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author tbula
 */
class Common_Email
{
    public static function SendEmail(Model_Email $email)
    {
       return mail(Config_Email::EMAIL, $email->GetSubject(), $email->GetContent().'\\n\\n'.$email->GetSignature(),'From: '.$email->GetAddress());
    }
}

?>
