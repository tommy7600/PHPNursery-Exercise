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
include_once 'PdoExtension.php';
include_once 'Config.php';
include_once 'Role.php';

class RoleCommon {
   
    public static function GetRoleById($id)
    {
        $db = new PdoExtension(Config::HOST, Config::USER, Config::PASS);
        $query ='SELECT `id`, `name`, `description` FROM `roles` WHERE `id` = :id';
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $db = null;
        
        $role = new Role();
        $role->SetId($row['id']);
        $role->SetDescription($row['description']);
        $role->SetName($row['name']);
        
        return $role;
    }
    
    public static function GetRoles()
    {
        try
        {
            $db = new PdoExtension(Config::HOST, Config::USER, Config::PASS);

            $query ='SELECT `id`, `name`, `description` FROM `roles`';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $roles = array();
            while($row = $stmt->fetch())
            {
                $role = new Role();
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
