<?php
/**
 * User: Kamil
 * Date: 02.12.12
 * Time: 15:51
 */

include("configDAL.php");
class DalPDO extends PDO
{
    public  function __construct()
    {
           parent::__construct(configDAL::ConnectionString, configDAL::User, configDAL::Password);
    }

    public function selectAll($table, array $columns)
    {
        $query = 'SELECT '.implode(', ', array_values($columns)).' FROM '.$table;
        $statment = $this->prepare($query);
        $statment->execute();

        return $statment->fetchAll();
    }

    public function update($table, array $columnsVals, $id)
    {
        $query = "UPDATE ".$table." SET ".implode("=?, ", array_keys($columnsVals))."=? WHERE id=".$id;
        $statment = $this->prepare($query);

        $paramId = 1;

        foreach($columnsVals as $key => &$val)
        {
            $statment->bindValue($paramId, $val);
            $paramId++;
        }
        var_dump( $statment->execute());

        return $statment->rowCount();
    }

    public function select($tabel, array $columns, array $wheres)
    {
        $query = "Select ". implode(", ",array_values($columns))." FROM ".$tabel." WHERE ";

        $where = implode("=? AND ", array_keys($wheres));

        $query.=$where;
        $query.="=?";

        $statement = $this->prepare($query);

        $paramId = 1;
        foreach($wheres as $key => $val)
        {
            $statement->bindValue($paramId, $val);
            $paramId++;
        }

        $statement->execute();

        return $statement->fetchAll();
    }

    public function insert($table, array $vals)
    {
        $query = "INSERT INTO ".$table." ( ".implode(", ", array_keys($vals)).") VALUES ( :".implode(', :', array_keys($vals)).")";
        $statement = $this->prepare($query);

        foreach($vals as $key => &$val)
        {
            $statement->bindValue(":".$key, $val);
        }
        return $statement->execute();
    }

    public function delete($table, $id)
    {
        $query = "DELETE FROM ".$table." WHERE id=".$id;

        $statement = $this->prepare($query);

        $statement->execute();
    }
}
