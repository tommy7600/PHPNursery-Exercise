<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Role
 *
 * @author tbula
 */
class Role {
    private $id;
    private $name;
    private $desc;
    
    public function SetName($name)
    {
        $this->name = $name;
    }
    
    public function GetName()
    {
        return $this->name;
    }
    
    public function SetDesc($desc)
    {
        $this->desc = $desc;
    }
    
    public function GetDesc()
    {
        return $this->desc;
    }
    
    public function SetId($id)
    {
        $this->id = $id;
    }
    
    public function GetId()
    {
        return $this->id;
    }
}

?>
