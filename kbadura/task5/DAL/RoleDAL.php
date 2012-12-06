<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 12/5/12
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */
class RoleDAL
{
    public function selectAll()
    {
        $db = new DalPDO();

        $result = $db->selectAll("roles", $this->getAllColumnName());

        $roles = array();

        foreach ($result as $key => $val)
        {
            $roles[$val[0]]=new Role($val[0], $val[1], $val[2]);
        }

        return $roles;
    }

    public function insert(Role $role)
    {
        $db = new DalPDO();

        $db->insert("roles", $this->prepareData($role));
    }

    public function update(Role $role)
    {
        $db = new DalPDO();

        $db->update("roles", $this->prepareData($role), $role->getId());
    }

    public function getAllColumnName()
    {
        return array("id", "name","description");
    }

    private function prepareData(Role $role)
    {
        return array
        (
            "name"=>$role->getName(),
            "description"=>$role->getDescription()
        );
    }
}
