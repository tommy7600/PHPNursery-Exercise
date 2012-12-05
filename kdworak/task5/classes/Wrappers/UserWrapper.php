<?php

    class UserWrapper
    {
        // fields
        private $user_Id;
        private $user_Role;
        private $user_FirstName;
        private $user_LastName;
        private $user_Pesel;
        private $user_Address;
        private $user_PostalCode;
        private $user_Phone;
        private $user_Email;
        private $user_CreatedDate;
              
        // getters.
        public function __get($_name) 
        {
            return $this->$_name;
        }
        
        // setters.
        public function __set($_name, $_value) 
        {
            $this->$_name = $_value;
        }

        // constructor.
        public function __construct(array $params) { 
            $this->user_Id = $params['User_Id'];
            $this->user_Role = $params['User_Role'];
            $this->user_FirstName = $params['User_FirstName'];
            $this->user_LastName = $params['User_LastName'];
            $this->user_Pesel = $params['User_Pesel'];
            $this->user_Address = $params['User_Address'];
            $this->user_PostalCode = $params['User_PostalCode'];
            $this->user_Phone = $params['User_Phone'];
            $this->user_Email = $params['User_Email'];
            $this->user_CreatedDate = $params['User_CreatedDate'];
        }
    }