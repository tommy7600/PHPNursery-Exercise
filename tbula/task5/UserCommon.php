<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserCommon
 *
 * @author tbula
 */
class UserCommon {
    
    public function SaveUser(User $user)
    {
        $db = new PdoExtension('mysql:host='.Config::HOST.';', Config::USER, Config::PASS, '');
        $db->Insert('User', ConverTuserToArray($user));
        
        $db = null;
    }
    
    public function UpdateUser(User $user)
    {
        
    }
    
    public function GetUserById($id)
    {
        
    }
    
    private function ConvertUserToArray(User $user)
    {
        $array = array();
        $array['id'] = $user->GetId();
        $array['roleid'] = $user->GetRole()->GetId();
        $array['firstName'] = $user->GetFirstName();
        $array['secondName'] = $user->GetSecondName();
        $array['pesel'] = $user->GetPesel();
        $array['address'] = $user->GetAddress();
        $array['postCode'] = $user->GetPostCode();
        $array['phone'] = $user->GetPhone();
        $array['email'] = $user->GetEmail();
        $array['birthDate'] = $user->GetBirthDate();
        return $array;
    }
}

?>