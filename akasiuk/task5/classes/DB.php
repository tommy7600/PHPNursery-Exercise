<?php

class DB extends PDO
{

    public function __construct()
    {
        parent::__construct('mysql:host=' . Config::host . ';dbname=' . Config::db . ';charset=utf8', Config::user, Config::pass, array(PDO::ATTR_PERSISTENT => true));
    }

    public function Select($tableName, array $columnsArray, array $conditionArray)
    {
        $columns = implode(', ', $columnsArray);

        $conditions = implode(' AND ', array_keys($conditionArray));

        $statement = $this->prepare('SELECT ' . $columns . ' FROM ' . $tableName . ' WHERE ' . $conditions);

        $parameter = 1;
        
        foreach ($conditionArray as $condition)
        {
            $statement->bindValue($parameter, $condition);

            ++$parameter;
        }
        
        if (!$statement->execute())
        {
            throw new Exception("Nie udało się wybrać rekordu z bazy");
        }

        return $statement->fetchAll();
    }

    public function SelectAll($tableName, array $columnsArray)
    {
        $columns = implode(', ', $columnsArray);

        $statement = $this->query('SELECT ' . $columns . ' FROM ' . $tableName);

        if (!$statement->execute())
        {
            throw new Exception("Nie udało się wybrać rekordów z bazy");
        }

        return $statement->fetchAll();
    }

    public function Insert($tableName, array $valuesArray)
    {
        $columns = implode(', ', array_keys($valuesArray));

        $blanks = implode(', ', array_fill(0, count($valuesArray), '?'));
        
        $statement = $this->prepare('INSERT INTO ' . $tableName . ' (' . $columns . ') VALUES (' . $blanks . ')');

        $parameter = 1;
        
        foreach ($valuesArray as $value)
        {
            $statement->bindValue($parameter, $value);
            
            ++$parameter;
        }
        
        if (!$statement->execute())
        {
            throw new Exception("Nie udało się wstawić rekordu do bazy");
        }
    }

    public function Update($tableName, array $valuesArray, array $conditionArray)
    {
        $query = 'UPDATE ' . $tableName . ' SET ';

        $columns = array_keys($valuesArray);

        foreach ($columns as $key => $column)
        {
            $columns[$key] .= '=?';
        }

        $conditions = implode(' AND ', array_keys($conditionArray));

        $query .= implode(', ', $columns) . ' WHERE ' . $conditions;

        $statement = $this->prepare($query);

        $parameter = 1;

        foreach ($valuesArray as $value)
        {
            $statement->bindValue($parameter, $value);

            ++$parameter;
        }

        foreach ($conditionArray as $condition)
        {
            $statement->bindValue($parameter, $condition);

            ++$parameter;
        }
        
        if (!$statement->execute())
        {
            throw new Exception("Nie udało się zaktualizować rekordów w bazie");
        }
    }
    
    public function Delete($tableName, array $conditionArray)
    {
        $conditions = implode(' AND ', array_keys($conditionArray));

        $statement = $this->prepare('DELETE FROM ' . $tableName . ' WHERE ' . $conditions);
        
        $parameter = 1;

        foreach ($conditionArray as $condition)
        {
            $statement->bindValue($parameter, $condition);

            ++$parameter;
        }
        
        if (!$statement->execute())
        {
            throw new Exception("Nie udało się usunąć rekordów z bazy");
        }
    }
}