<?php

class PDOv2 extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=' . Conf::DB_HOST . ';dbname=' . Conf::DB_DBNAME . ';charset=utf-8', Conf::DB_USERNAME, Conf::DB_PASSWORD);
        
        $this->exec("SET CHARACTER SET utf8");
    }
    
    public function insert($table, array $params)
    {
        return $this->exec("INSERT INTO " . $table . "(" . implode(",",array_keys($params)) . ") VALUES ('" . implode("','",array_values($params)) . "')");
    }

    public function update($table, array $params, $where)
    {
        foreach($params As $id => $param) {
            $assignments[$id] = $id . "='" . $param . "'";
        }
        
        return $this->exec("UPDATE " . $table . " SET " . implode(",",array_values($assignments)) . " WHERE " . $where);
    }
    
}

?>
