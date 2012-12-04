<?php
    class RoleWrapper
    {
        // FIELDS
        private $role_Id;
        private $role_Name;
        private $role_Description;
        
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
        public function __construct($_roleName, $_role_Description) 
        {
            $this->role_Name = $_roleName;
            $this->role_Description = $_role_Description;
        }
        
    }