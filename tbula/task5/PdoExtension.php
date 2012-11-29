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
class PdoExtension extends PDO
{
    public function __construct($dsn, $username, $passwd, $options, $db) {
        parent::__construct($dsn, $username, $passwd, $options);
        $this->select_db(Config::DATABASE);
    }
    
    public function Insert($table, array $values)
    {
        $query = $this->prepare('INSERT INTO '.$table.'( '.implode( $values, ",").') VALUES (:'.implode($values, ",:").')');
        foreach ($values as $key => $value) 
        {
            $query->bindParam(':'.$key, $value);
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
            $query->bindParam(':'.$key, $value);
        }
        
        $query->execute();
    }
}

?>
