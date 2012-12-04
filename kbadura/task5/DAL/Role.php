<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kamil
 * Date: 02.12.12
 * Time: 12:48
 */
class Role
{
    protected $id;

    protected $name;

    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    function __construct($id, $name, $description)
    {
        $this->description = $description;
        $this->id = $id;
        $this->name = $name;
    }

    public static function getAllColumnName()
    {
        return array("id", "name","description");
    }
}
