<?php
    class UserService 
    {
        
        private $customPDO;
        
        // constructor.
        public function __construct() {
            $this->customPDO = new CustomPDO();
        }

        // adding new user to the database.
        public function AddUser(\UserWrapper $user)
        {
            $param = $this->prepareParams($user);
            $this->customPDO->insert('users', $param);
        }
        
        // updating selected user in the database.
        public function UpdateUser($params, $id)
        {
            $this->customPDO->update('users', $params, 'User_Id = ' . $id);
        }
        
        // deleting user from the database.
        public function RemoveUser($id)
        {
            $this->customPDO->Remove('users', 'WHERE User_Id = ' . $id);
        }
        
        // select single user by id.
        public function SelectUserById($id)
        {
            $result = $this->customPDO->SelectSingleRow('users', 'WHERE User_Id = ' . $id);
            return new UserWrapper($result);
        }
        
        // select all users.
        public function SelectAll()
        {
            $roleService = new RoleService();
            $allRoles = $roleService->SelectAll();
            
            $users = array();
            foreach($this->customPDO->SelectAll('users') as $key => $val)
            {
                $user = new UserWrapper($val);
                $user->user_Role = $allRoles[$user->user_Role - 1]->role_Name;
                $users[] = $user;
            }
            return $users;
        }
        
        // select all users.
        public function SelectAllBySearch($phase)
        {
            $roleService = new RoleService();
            $allRoles = $roleService->SelectAll();
            
            $users = array();
            
            $condition = ' WHERE User_FirstName LIKE \'%' . $phase . '%\'';
            $condition .= ' OR User_LastName LIKE \'%' . $phase . '%\'';
            $condition .= ' OR User_Pesel LIKE \'%' . $phase . '%\'';
            $condition .= ' OR User_Email LIKE \'%' . $phase . '%\'';
            
            foreach($this->customPDO->SelectAllBySearch('users', $condition) as $key => $val)
            {
                $user = new UserWrapper($val);
                $user->user_Role = $allRoles[$user->user_Role - 1]->role_Name;
                $users[] = $user;
            }
            return $users;
        }
        
        // packing values into special params array.
        private function prepareParams(\UserWrapper $user)
        {
            $param = array(
                'User_Role' => $user->user_Role,
                'User_FirstName' => $user->user_FirstName,
                'User_LastName' => $user->user_LastName,
                'User_Pesel' => $user->user_Pesel,
                'User_Address' => $user->user_Address,
                'User_PostalCode' => $user->user_PostalCode,
                'User_Phone' => $user->user_Phone,
                'User_Email' => $user->user_Email
            );
                       
            return $param;
        }
    }