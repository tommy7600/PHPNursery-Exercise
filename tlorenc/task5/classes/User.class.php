<?php

class User
{
    private $id;
    private $role;
    private $email;
    private $phone;
    private $pesel;
    private $name;
    private $surname;
    private $address;
    private $addDate;
    private $postCode;
    private $db;


    function __construct(PDOExtended $db)
    {
        $this->db = $db;
    }

    function __destruct()
    {
        $this->db = null;
    }

    public function SetPostCode($postCode)
    {
        if (!Validators::CheckPostCode($postCode))
            throw new Exception('You have entered postal code in wrong format. It should be xx-xxx, eg. 40-600.');

        $this->postCode = $postCode;
    }

    public function GetPostCode()
    {
        return $this->postCode;
    }

    public function GetAddDate()
    {
        return $this->addDate;
    }

    public function GetAddress()
    {
        return $this->address;
    }

    public function GetEmail()
    {
        return $this->email;
    }

    public function GetId()
    {
        return $this->id;
    }

    public function SetId($id)
    {
        $this->id = $id;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetPesel()
    {
        return $this->pesel;
    }

    public function GetPhone()
    {
        return $this->phone;
    }

    public function GetRole()
    {
        return $this->role;
    }

    public function GetSurname()
    {
        return $this->surname;
    }

    public function SetAddDate()
    {
        $this->addDate = date("Y-m-d H:i:s");
    }

    public function SetAddress($address)
    {
        $this->address = $address;
    }

    public function SetEmail($email)
    {
        if (!Validators::CheckEmail($email))
            throw new Exception('You have entered wrong email address.');
        $this->email = $email;
    }

    public function SetName($name)
    {
        if (!Validators::CheckString($name))
            throw new Exception('You have entered user name in wrong format. Please use letters.');
        $this->name = $name;
    }

    public function SetPesel($pesel)
    {
        if (!Validators::CheckPesel($pesel))
            throw new Exception('You have entered wrong PESEL number.');
        $this->pesel = $pesel;
    }

    public function SetPhone($phone)
    {
        if (!Validators::CheckPhoneNumber($phone))
            throw new Exception('You have entered phone number in wrong format. Please use only numbers.');
        $this->phone = $phone;
    }

    public function SetRole($role)
    {
        $this->role = $role;
    }

    public function SetSurname($surname)
    {
        if (!Validators::CheckString($surname))
            throw new Exception('You have entered user surname in wrong format. Please use letters.');
        $this->surname = $surname;
    }

    public function AddUser($name, $surname, $address, $email, $phone, $pesel, $role, $postCode)
    {
        $this->SetName($name);
        $this->SetSurname($surname);
        $this->SetAddress($address);
        $this->SetEmail($email);
        $this->SetPhone($phone);
        $this->SetPesel($pesel);
        $this->SetAddDate();
        $this->SetRole($role);
        $this->SetPostCode($postCode);

        $insert = array(
            "u_name" => $this->GetName(),
            "u_surname" => $this->GetSurname(),
            "u_pesel" => $this->GetPesel(),
            "u_post_code" => $this->GetPostCode(),
            "u_phone" => $this->GetPhone(),
            "u_address" => $this->GetAddress(),
            "u_add_date" => $this->GetAddDate(),
            "u_role_id" => $this->GetRole(),
            "u_email" => $this->GetEmail()
        );

        $this->db->Insert('users', $insert);
    }

    public function DeleteUserById($id)
    {
        $this->id = $id;
        $bind = array(
            ":id" => $this->id
        );
        $this->db->Delete("users", "u_id= :id", $bind);
    }

    public function UpdateUser($id, $name, $surname, $address, $email, $phone, $pesel, $role, $postCode)
    {
        $this->id = $id;
        $this->SetName($name);
        $this->SetSurname($surname);
        $this->SetAddress($address);
        $this->SetEmail($email);
        $this->SetPhone($phone);
        $this->SetPesel($pesel);
        $this->SetAddDate();
        $this->SetRole($role);
        $this->SetPostCode($postCode);

        $bind = array(
            ":id" => $this->id
        );

        $update = array(
            "u_name" => $this->GetName(),
            "u_surname" => $this->GetSurname(),
            "u_pesel" => $this->GetPesel(),
            "u_post_code" => $this->GetPostCode(),
            "u_phone" => $this->GetPhone(),
            "u_address" => $this->GetAddress(),
            "u_role_id" => $this->GetRole(),
            "u_email" => $this->GetEmail()
        );

        $this->db->Update('users', $update, "u_id= :id", $bind);
    }

    public function GetUserDataById($id)
    {
        $this->id = $id;
        $bind = array(
            ":id" => $this->id
        );

        $result = $this->db->Select("users", "u_id= :id", $bind);

        foreach ($result As $key => $value) {
            $this->name = $value["u_name"];
            $this->addDate = $value["u_add_date"];
            $this->address = $value["u_address"];
            $this->email = $value["u_email"];
            $this->pesel = $value["u_pesel"];
            $this->phone = $value["u_phone"];
            $this->role = $value["u_role_id"];
            $this->surname = $value["u_surname"];
            $this->postCode = $value["u_post_code"];
        }
    }
}