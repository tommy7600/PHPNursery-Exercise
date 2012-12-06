<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 12/5/12
 * Time: 2:15 PM
 * To change this template use File | Settings | File Templates.
 */
class UserRoleConverter
{
    public static function convertToUserRole(array $users = null, array $role=null)
    {
        if(isset($users) && isset($role))
        {
            $result = array();

            foreach($users as $key=>$val)
            {
                $result[]=new UserRole($role[$val->getRoleId()], $val);
            }

            return $result;
        }
    }
}
