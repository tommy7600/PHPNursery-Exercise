<?php

class Role
{
    private $id;
    private $name;
    private $description;

    public function GetId()
    {
        return $this->id;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetDescription()
    {
        return $this->description;
    }

    private function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public static function SelectRole($id)
    {
        $db = new DB();

        $columns = Role::GetSelectColumns();

        $where = array('id = ?' => $id);

        $result = $db->Select('roles', $columns, $where)[0];

        return new Role($result[0], $result[1], $result[2]);
    }

    public static function SelectAllRoles()
    {
        $db = new DB();

        $columns = Role::GetSelectColumns();

        $result = $db->SelectAll('roles', $columns);

        $roles = array();

        foreach ($result as $role)
        {
            $roles[] = new Role($role[0], $role[1], $role[2]);
        }

        return $roles;
    }

    private static function GetSelectColumns()
    {
        return array('id', 'nazwa', 'opis');
    }
}