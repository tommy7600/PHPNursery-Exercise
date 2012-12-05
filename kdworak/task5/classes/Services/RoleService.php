<?php
    class RoleService 
    {
        // get all roles.
        public function SelectAll(){
            $instance = new CustomPDO();
            $items = $instance->SelectAll('roles');
            $wrappers = array();
            foreach($items as $key => $val)
            {
                $roleWrapper = new RoleWrapper($val['1'], $val['2']);
                $roleWrapper->role_Id = $val['0'];
                $wrappers[] = $roleWrapper;
            }
            
            return $wrappers;
        }
        
    }