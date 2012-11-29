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
        if(is_numeric($id))
        {
            $his->id = $id;
        }
        else
        {
            throw  new Exception('Id is not valid');
        }
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
        if(is_string(trim($firstName)))
        {
            $this->firstName = trim($firstName);
        }
        else
        {
            throw new Exception('First name is not valid');
        }
    }
    
    public function GetFirstName()
    {
        return $this->firstName;
    }
    
    public function SetSecondName($secondName)
    {
        if(is_string(trim($secondName)))
        {
            $this->secondName = trim($secondName);
        }
        else
        {
            throw new Exception('Second name is not valid');
        }
    }
    
    public function GetSecondName()
    {
        return $this->secondName;
    }
    
    public function SetPesel($pesel)
    {
        if(is_numeric($pesel) || preg_match('/[0-9]/{11}', $pesel))
        {
            $this->pesel = $pesel;
        }
        else
        {
            throw new Exception('Pesel is not valid');
        }
    }
    
    public function GetPesel()
    {
        return $this->pesel;
    }
    
    public function SetAddress($address)
    {
        if(is_string($address))
        {
            $this->address = $address;
        }
        else
        {
            throw new Exception('Address is not valid');
        }
    }
    
    public function GetAddress()
    {
        return $this->address;
    }
    
    public function SetPostCode($postCode)
    {
        if(preg_match('/[0-9]/{2}-/[0-9]{3}', $postCode))
        {
            $this->postCode = $postCode;
        }
        else
        {
            throw  new Exception('Post code is not valid');
        }
    }
    
    public function GetPostCode()
    {
        return $this->postCode;
    }
    
    public function SetPhone($phone)
    {
        if(is_numeric($phone))
        {
            $this->phone = $phone;
        }
        else
        {
            throw new Exception('Phone number is not valid');
        }
    }
    
    public function GetPhone()
    {
        return $this->phone;
    }
    
    public function SetBirthDate($birthDate)
    {
        if (preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $birthDate, $matches)) 
        {
            if (!checkdate($matches[2], $matches[1], $matches[3])) 
            {
                throw new Exception('Birth date is not valid');
            }
        } 
        else 
        {
             throw new Exception('Birth date is not valid');
        }
        $this->birthDate = $birthDate;
    }
    
    public function GetBirthDate()
    {
        return $this->birthDate;
    }
    
    public function SetEmail($email)
    {
        if(is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->email = $email;
        }
        else
        {
            throw new Exception('Email is not valid');
        }
    }
    
    public function GetEmail()
    {
        return $this->email;
    }
}
