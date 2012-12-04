<?php

class PDOv2 extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=' . Conf::DB_HOST . ';dbname=' . Conf::DB_DBNAME . ';charset=utf-8', Conf::DB_USERNAME, Conf::DB_PASSWORD);
        
        $this->exec("SET CHARACTER SET utf8");
    }
    

}

?>
