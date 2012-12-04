<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PdoExtension
 *
 * @author tbula
 */

class Common_PdoExtension extends PDO
{
    public function __construct($dsn, $username, $passwd) {
        parent::__construct($dsn, $username, $passwd);
    }
    
    public function Insert($table, array $values)
    {
        $query = $this->prepare('INSERT INTO '.$table.'( '.implode( array_keys($values), ",").') VALUES (:'.implode(array_keys($values), ",:").')');
        foreach ($values as $key => $value) 
        {
            $query->bindValue(':'.$key, $value);
        }
        
        $query->execute();
    }
    
    public function Update($table, array $values, $whereCondition)
    {
        $sets ='';
        foreach ($values as $key=> $value)
        {
            $sets = $key.' = :'.$key.',';
        }
        $sets = substr_replace($sets ,"",-1);
        
        $query = $this->prepare('UPDATE '.$table.' SET '.$sets.' WHERE '.$whereCondition);
         
        foreach ($values as $key => $value) 
        {
            $query->bindValue(':'.$key, $value);
        }
        
        $query->execute();
    }
}

?>
