<?php

class User
{
    private $id;
    private $role;
    private $name;
    private $surname;
    private $pesel;
    private $address;
    private $postalCode;
    private $phone;
    private $email;
    private $joinDate;

    public function GetId()
    {
        return $this->id;
    }

    public function GetRole()
    {
        return $this->role;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetSurname()
    {
        return $this->surname;
    }

    public function GetPESEL()
    {
        return $this->pesel;
    }

    public function GetAddress()
    {
        return $this->address;
    }

    public function GetPostalCode()
    {
        return $this->postalCode;
    }

    public function GetPhone()
    {
        return $this->phone;
    }

    public function GetEmail()
    {
        return $this->email;
    }

    public function GetJoinDate()
    {
        return $this->joinDate;
    }

    private function __construct($id, $role, $name, $surname, $pesel, $address, $postalCode, $phone, $email, $joinDate)
    {
        $userRole = Role::SelectRole($role);

        $this->id = $id;
        $this->role = $userRole;
        $this->name = $name;
        $this->surname = $surname;
        $this->pesel = $pesel;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->phone = $phone;
        $this->email = $email;
        $this->joinDate = $joinDate;
    }

    public static function SelectUser($id)
    {
        $db = new DB();

        $columns = User::GetSelectColumns();

        $where = array('id = ?' => $id);

        $result = $db->Select('users', $columns, $where)[0];

        return new User($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9]);
    }

    public static function SelectAllUsers()
    {
        $db = new DB();

        $columns = User::GetSelectColumns();

        $result = $db->SelectAll('users', $columns);

        $users = array();

        foreach ($result as $user)
        {
            $users[] = new User($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $user[6], $user[7], $user[8], $user[9]);
        }

        return $users;
    }

    public static function FindUsers($name, $surname, $pesel, $email)
    {
        $where = array();

        if (strlen($name) > 0)
        {
            $where['imie LIKE ?'] = '%' . $name . '%';
        }

        if (strlen($surname) > 0)
        {
            $where['nazwsko LIKE ?'] = '%' . $surname . '%';
        }

        if (strlen($pesel) > 0)
        {
            $where['pesel LIKE ?'] = '%' . $pesel . '%';
        }

        if (strlen($email) > 0)
        {
            $where['email LIKE ?'] = '%' . $email . '%';
        }

        if (count($where) > 0)
        {
            $db = new DB();

            $columns = User::GetSelectColumns();

            $result = $db->Select('users', $columns, $where);

            $users = array();

            foreach ($result as $user)
            {
                $users[] = new User($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $user[6], $user[7], $user[8], $user[9]);
            }

            return $users;
        }

        return User::SelectAllUsers();
    }

    public static function AddUser($role, $name, $surname, $pesel, $address, $postalCode, $phone, $email)
    {
        $values = User::ValidateDataAndBuildValuesArray($role, $name, $surname, $pesel, $address, $postalCode, $phone, $email);

        $db = new DB();

        $db->insert('users', $values);
    }

    public static function UpdateUser($id, $role, $name, $surname, $pesel, $address, $postalCode, $phone, $email)
    {
        $values = User::ValidateDataAndBuildValuesArray($role, $name, $surname, $pesel, $address, $postalCode, $phone, $email);

        $db = new DB();

        $db->update('users', $values, array('id = ?' => $id));
    }

    public static function DeleteUser($id)
    {
        $db = new DB();

        $where = array('id = ?' => $id);
        
        $db->Delete('users', $where);
    }
    
    private static function ValidateDataAndBuildValuesArray($role, $name, $surname, $pesel, $address, $postalCode, $phone, $email)
    {
        User::ValidatePESEL($pesel);
        User::ValidateEmail($email);
        User::ValidatePostalCode($postalCode);

        $values = array(
            'rola_id' => $role,
            'imie' => $name,
            'nazwisko' => $surname,
            'pesel' => $pesel,
            'adres_zamieszkania' => $address,
            'kod_pocztowy' => $postalCode,
            'telefon' => $phone,
            'email' => $email
        );

        return $values;
    }

    private static function ValidatePESEL($pesel)
    {     
        if (preg_match('/^\d{11}$/', $pesel))
        {        
            $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);

            $sum = 0;
            for ($i = 0; $i < 10; $i++)
            {
                $sum += $weights[$i] * $pesel[$i];
            }
            $int = 10 - $sum % 10;
            $checksum = ($int == 10) ? 0 : $int;

            if ($checksum == $pesel[10])
            {
                return;
            }
        }

        throw new Exception("Numer PESEL jest niepoprawny");
    }

    private static function ValidateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Adres e-mail jest niepoprawny");
        }
    }

    private static function ValidatePostalCode($postalCode)
    {
        if (!preg_match('/^\d{2}-\d{3}$/', $postalCode))
        {
            throw new Exception("Kod pocztowy jest niepoprawny");
        }
    }
    
    private static function GetSelectColumns()
    {
        return array('id', 'rola_id', 'imie', 'nazwisko', 'pesel', 'adres_zamieszkania', 'kod_pocztowy', 'telefon', 'email', 'data_dodania');
    }
}