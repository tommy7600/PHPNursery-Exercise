<?php

class Role
{
    static public function GetRoles(PDOExtended $db)
    {
       return $db->Select('roles');
    }
}