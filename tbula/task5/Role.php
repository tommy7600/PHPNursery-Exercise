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
    private $description;
    
    public function SetName($name)
    {
        $this->name = $name;
    }
    
    public function GetName()
    {
        return $this->name;
    }
    
    public function SetDescription($description)
    {
        $this->description = $description;
    }
    
    public function GetDescrition()
    {
        return $this->description;
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
