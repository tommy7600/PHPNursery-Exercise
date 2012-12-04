<?php

class Exercise5controller
{
    public $userHeaders;
    public $userParams;
    public $userRoles;
    
    public function __construct()
    {
        $this->userHeaders['0'] = 'ID';
        $this->userHeaders['1'] = 'Role ID';
        $this->userHeaders['2'] = 'Name';
        $this->userHeaders['3'] = 'Surname';
        $this->userHeaders['4'] = 'PESEL';
        $this->userHeaders['5'] = 'Address';
        $this->userHeaders['6'] = 'Zip code';
        $this->userHeaders['7'] = 'Email';
        $this->userHeaders['8'] = 'Mobile';
        $this->userHeaders['9'] = 'Reg date';
        $this->userHeaders['10'] = 'Action';
        
        $this->userParams['0'] = 'id';
        $this->userParams['1'] = 'role';
        $this->userParams['2'] = 'name';
        $this->userParams['3'] = 'surname';
        $this->userParams['4'] = 'pesel';
        $this->userParams['5'] = 'address';
        $this->userParams['6'] = 'zipcode';
        $this->userParams['7'] = 'email';
        $this->userParams['8'] = 'mobile';
        $this->userParams['9'] = 'reg_date_formated';
        
        $this->userRoles = Roles::getRoles();
    }


}

?>
