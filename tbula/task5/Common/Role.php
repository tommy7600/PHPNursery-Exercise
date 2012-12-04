<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoleCommon
 *
 * @author Kenny
 */
class Common_Role 
{
   
    public static function GetRoleById($id)
    {
        $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);
        $query ='SELECT `id`, `name`, `description` FROM `roles` WHERE `id` = :id';
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $db = null;
        
        $role = new Class_Role();
        $role->SetId($row['id']);
        $role->SetDescription($row['description']);
        $role->SetName($row['name']);
        
        return $role;
    }
    
    public static function GetRoles()
    {
        try
        {
            $db = new Common_PdoExtension(Config_DB::HOST, Config_DB::USER, Config_DB::PASS);

            $query ='SELECT `id`, `name`, `description` FROM `roles`';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $roles = array();
            while($row = $stmt->fetch())
            {
                $role = new Class_Role();
                $role->SetId($row['id']);
                $role->SetDescription($row['description']);
                $role->SetName($row['name']);
                $roles[$role->GetId()] = $role;
            }

            }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        $db = null;
        return $roles;
    }
}

?>
