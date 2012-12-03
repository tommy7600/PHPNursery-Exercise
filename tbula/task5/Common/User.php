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
class Common_User {
    
    public static function SaveUser(Class_User $user)
    {
        $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
        $db->Insert('users', Common_User::ConvertUserToArray($user));
        $db = null;
    }
    
    public static function UpdateUser(Class_User $user)
    {
        $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
        $db->Update('users', Common_User::ConverTuserToArray($user),'id = '. $user->GetId());
        $db = null;
    }
    
    public static function DeleteUser($id)
    {
       $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
       $query = 'DELETE FROM users WHERE `id`= :id';
       $stmt = $db->prepare($query);
       $stmt->bindParam(':id', $id);
       $stmt->execute();
       $db = null; 
    }
    
    public static function FindUser($firstName, $secondName, $pesel, $email)
    {
        $dbo = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
        $query = 'SELECT `id`, `roleId`, `firstName`, `secondName`, `pesel`, `address`, `postCode`, `phone`, `email`, `birthDate` FROM `users` 
            WHERE (`firstName` = :firstName OR :firstName = "")
            AND (`secondName` = :secondName OR :secondName = "")
            AND (`pesel` = :pesel OR :pesel = "")
            AND (`email` = :email OR :email = "")';
        
        $stmt = $dbo->prepare($query);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':secondName', $secondName);
        $stmt->bindParam(':pesel', $pesel);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $users = array();
        
        while ($row = $stmt->fetch())
        {
            array_push($users, Common_User::ConvertRowToUser($row));
        }
        
        $dbo = null;
        return $users;
    }
    
    public static function GetUserById($id)
    {
        $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
        $query ='SELECT `id`, `roleId`, `firstName`, `secondName`, `pesel`, `address`, `postCode`, `phone`, `email`, `birthDate` FROM `users` WHERE `id` = :id';
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $db = null;
        
        return Common_User::ConvertRowToUser($row);
    }
    
    private static  function ConvertRowToUser($row)
    {
        $user = new Class_User();
        $user->SetId($row['id']);
        $user->SetAddress($row['address']);
        $user->SetBirthDate($row['birthDate']);
        $user->SetEmail($row['email']);
        $user->SetFirstName($row['firstName']);
        $user->SetSecondName($row['secondName']);
        $user->SetPesel($row['pesel']);
        $user->SetPhone($row['phone']);
        $user->SetPostCode($row['postCode']);
        $user->SetRole(Common_Role::GetRoleById($row['roleId']));
        
        return $user;
    }

    private static function ConvertUserToArray(Class_User $user)
    {
        $array = array();
        
        $array['roleId'] = $user->GetRole()->GetId();
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