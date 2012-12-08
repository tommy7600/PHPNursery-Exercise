<?php

class PDOExtended extends PDO
{
    private $sql;
    private $bind;

    public function __construct($dsn, $user = "", $password = "")
    {
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            parent::__construct($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            echo "PDO Exception message: " . $e->getMessage();
        }
    }

    public function Delete($table, $where, $bind = "")
    {
        $sql = "DELETE FROM " . $table . " WHERE " . $where . ";";
        $this->Run($sql, $bind);
    }

    private function filter($table, $info)
    {
        $driver = $this->getAttribute(PDO::ATTR_DRIVER_NAME);
        if ($driver == 'mysql') {
            $sql = "DESCRIBE " . $table . ";";
            $key = "Field";
        } else {
            throw new Exception("Lack off MySQL pdo driver");
        }

        if (false !== ($list = $this->Run($sql))) {
            $fields = array();
            foreach ($list as $record)
                $fields[] = $record[$key];
            return array_values(array_intersect($fields, array_keys($info)));
        }
        return array();
    }

    private function cleanup($bind)
    {
        if (!is_array($bind)) {
            if (!empty($bind))
                $bind = array($bind);
            else
                $bind = array();
        }
        return $bind;
    }

    public function Insert($table, $info)
    {
        $fields = $this->filter($table, $info);
        $sql = "INSERT INTO " . $table . " (" . implode($fields, ", ") . ") VALUES (:" . implode($fields, ", :") . ");";
        $bind = array();
        foreach ($fields as $field)
            $bind[":$field"] = $info[$field];
        return $this->Run($sql, $bind);
    }

    public function Run($sql, $bind = "")
    {
        $this->sql = trim($sql);
        $this->bind = $this->cleanup($bind);

        try {
            $pdostmt = $this->prepare($this->sql);
            if ($pdostmt->execute($this->bind) !== false) {
                if (preg_match("/^(" . implode("|", array("select", "describe")) . ") /i", $this->sql))
                    return $pdostmt->fetchAll(PDO::FETCH_ASSOC);
                elseif (preg_match("/^(" . implode("|", array("delete", "insert", "update")) . ") /i", $this->sql))
                    return $pdostmt->rowCount();
            }
        } catch (PDOException $e) {
            echo "PDO Exception message: " . $e->getMessage();
            return false;
        }
    }

    public function Select($table, $where = "", $bind = "", $fields = "*", $joinType = "", $joinTable = "", $joinStatement = "", $orderByType = "", $orderByField = "")
    {
        $sql = "SELECT " . $fields . " FROM " . $table;
        if (!empty($joinType) && !empty($joinStatement) && !empty($joinTable))
            $sql .= " " . $joinType . " " . $joinTable . " ON " . $joinStatement;
        if (!empty($where))
            $sql .= " WHERE " . $where;
        if (!empty($orderByType) && !empty($orderByField))
            $sql .= " ORDER BY " . $orderByField . " " . $orderByType;
        $sql .= ";";
        return $this->Run($sql, $bind);
        //SELECT * FROM users JOIN roles ON users.u_role_id=roles.r_id WHERE u_name LIKE '%mek%';
    }

    public function Update($table, $info, $where, $bind = "")
    {
        $fields = $this->filter($table, $info);
        $fieldSize = sizeof($fields);

        $sql = "UPDATE " . $table . " SET ";
        for ($f = 0; $f < $fieldSize; ++$f) {
            if ($f > 0)
                $sql .= ", ";
            $sql .= $fields[$f] . " = :update_" . $fields[$f];
        }
        $sql .= " WHERE " . $where . ";";

        $bind = $this->cleanup($bind);
        foreach ($fields as $field)
            $bind[":update_$field"] = $info[$field];

        return $this->Run($sql, $bind);
    }
}
