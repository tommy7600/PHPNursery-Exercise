<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author tbula
 */
class User {
    private $id;
    private $role;
    private $firstName;
    private $secondName;
    private $pesel;
    private $address;
    private $postCode;
    private $phone;
    private $email;
    private $birthDate;
    
    public function SetId($id)
    {
        $this->id = $id;
    }
    
    public  function GetId()
    {
        return $this->id;
    }
    
    public function SetRole(Role $role)
    {
        $this->role = $role;
    }
    
    public function GetRole()
    {
        return $this->role;
    }
    
    public function SetFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function GetFirstName()
    {
        return $this->firstName;
    }
    
    public function SetSecondName($secondName)
    {
        $this->secondName = $secondName;
    }
    
    public function GetSecondName()
    {
        return $this->secondName;
    }
    
    public function SetPesel($pesel)
    {
        $this->pesel = $pesel;
    }
    
    public function GetPesel()
    {
        return $this->pesel;
    }
    
    public function SetAddress($address)
    {
        $this->address = $address;
    }
    
    public function GetAddress()
    {
        return $this->address;
    }
    
    public function SetPostCode($postCode)
    {
        $this->postCode = $postCode;
    }
    
    public function GetPostCode()
    {
        return $this->postCode;
    }
    
    public function SetPhone($phone)
    {
        $this->phone = $phone;
    }
    
    public function GetPhone()
    {
        return $this->phone;
    }
    
    public function SetBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
    
    public function GetBirthDate()
    {
        return $this->birthDate;
    }
}
?>
