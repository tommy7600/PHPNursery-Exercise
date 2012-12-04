<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kamil
 * Date: 02.12.12
 * Time: 12:47
 */
class User
{
    protected $id;

    protected $role_id;

    protected $pesel;

    protected $name;

    protected $lastName;

    protected $address;

    protected $postCode;

    protected $phone;

    protected $email;

    protected $creatDate;

    public function getAddress()
    {
        return $this->address;
    }

    public function getCreatDate()
    {
        return $this->creatDate;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPesel()
    {
        return $this->pesel;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }

    public function __construct($id, $role_id, $pesel, $name, $lastName, $address, $postCode, $email, $phone, $creatDate)
    {
        $this->address = $address;
        $this->creatDate = $creatDate;
        $this->email = $email;
        $this->id = $id;
        $this->lastName = $lastName;
        $this->name = $name;
        $this->pesel = $pesel;
        $this->phone = $phone;
        $this->postCode = $postCode;
        $this->role_id = $role_id;
    }

    public function selectAll()
    {
        $columns = User::getAllColumnName();

        $db = new DalPDO();

        $users = array();

        $result = $db->selectAll("user", $columns);
        foreach($result as $key => $val)
        {
            $users[] = new User($val[0], $val[1], $val[2], $val[3], $val[4], $val[5], $val[6], $val[7], $val[8], $val[9]);
        }

        return $users;
    }

    public static function getAllColumnName()
    {
        return array("id", "role_id", "pesel", "name", "lastname", "address", "postcode", "email", "phone", "creat_date");
    }
}
