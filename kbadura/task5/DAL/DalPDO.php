<?php
/**
 * User: Kamil
 * Date: 02.12.12
 * Time: 15:51
 */
class DalPDO extends PDO
{
    protected $db;

    public  function __construct()
    {
           $this->db = new PDO('mysql:host=localhost;dbname=task5', 'root', '');
    }

    public function select($table, array $vars)
    {
        $statment = $this->db->prepare('Select '.implode(', ', array_values($vars)).' From '.$table);
        $statment->execute();

        $result = array();
        while($row = $statment->fetch(PDO::FETCH_ASSOC))
        {
            $result[$row['id']] = $row;
        }
        $statment = null;
        return $result;
    }

    public function insert($table, array $vals)
    {
        $statment = $this->db->prepare("INSERT INTO ".$table." ( '".implode("', '", array_keys($vals))."') VALUES ( :".implode(', :', array_keys($vals)).")");

        foreach($vals as $key => &$val)
        {
            $statment->bindParam(":".$key, $val);
        }

        $isOk = $statment->execute();
        $statment = null;
        return $isOk;
    }

    public function __destruct()
    {
        $this->db= null;
    }
}
