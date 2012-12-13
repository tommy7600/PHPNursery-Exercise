<?php

class Database extends PDO
{
    /*private $dbh;

    public function connect()
    {
        if ($this->dbh == null)
        {
            try
            {
                    $this->dbh = new PDO('mysql:host=localhost;dbname=zad5', 'root', '', array(PDO::ATTR_PERSISTENT => true));	
                    //Set Exception Mode to Error Mode
                    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e)
            {
                    print "Error!: " . $e -> getMessage() . '<br/>';
                    die();
            }
        }

    }
	*/
    public function select($tableName, $whereCondition)
    {
        try
        {
            $stmt = $this->prepare("SELECT * FROM ".$tableName." WHERE ".$whereCondition);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $e)
        {
            $this->rollBack();
            echo "Failed: " . $e -> getMessage() . '<br>';
        }
    }

     

    public function insert($tableName, array $values)
    {
        try
        {
            $columnNames = implode(", ", array_keys($values));
            $columns = ":".implode(", :", array_keys($values));
            $columnsArray = explode(", ", $columns);
            
            $stmt = $this->prepare("INSERT INTO ".$tableName." (".$columnNames.") VALUES (".$columns.")");
            
            $stmtParams = array_combine($columnsArray, $values);
            
            foreach ($stmtParams as $column => $value)       
            {
                $stmt -> bindValue($column, $value);
            }
            
            $this->beginTransaction();
            $stmt -> execute();

            $this->commit();
        }
        catch (Exception $e)
        {
            $this->rollBack();
            echo "Failed: " . $e -> getMessage() . '<br>';
        }
        
    }
    
    public function update($tableName, array $values, $whereCondition)
    {
        try
        {
            $setParametersArray = array();
            
            $i = 0;
            foreach ($values as $columnName => $columnValue)
            {
                $setParametersArray[$i] = ($columnName."=".$columnValue);
                $i++;
            }
            
            xdebug_var_dump($setParametersArray);
            
            $setParameters = implode(", ", $setParametersArray);
            xdebug_var_dump($setParameters);
            
            $stmt = $this->prepare("UPDATE ".$tableName." SET ".$setParameters." WHERE ".$whereCondition);
            xdebug_var_dump($stmt);
            
            $this->beginTransaction();
            $stmt -> execute();

            $this->commit();
            
        }
        catch (Exception $e)
        {
            $this->rollBack();
            echo "Failed: " . $e -> getMessage() . '<br>';
        }   
    }    
}