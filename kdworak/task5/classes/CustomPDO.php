<?php
    include 'config.php';
    
    class CustomPDO extends PDO 
    {
        private $dbh;
        
        // constructor.
        public function __construct() {
            
        }
        
        // Inserting a row into table.
        public function insert($tableName, array $params)
        {
            $this->_connectToDataBase();  
            $this->prepareParams($params, $columns, $values);
            $insertString = 'INSERT INTO ' . $tableName . ' (' . $columns . ') VALUES (' . $values . ');';
            $stmt = $this->dbh->prepare($insertString);
            
            try 
            {
                $stmt->execute();
            }
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }
            
            $this->dbh = null;    
        }
        
        // Updating a row in the table.
        public function update($tableName, array $params, $recordId)
        {
            $this->_connectToDataBase();
            $this->prepareParams($params, $columns, $values);
            $columns = explode(',', $columns);
            $values = explode(',', $values);
            $updateString = 'UPDATE ' . $tableName . ' SET ';
            for($i = 0; $i < sizeof($columns); ++$i)
            {
                $updateString .= ($columns[$i] . '=' . $values[$i] . ', ');
            }
            
            $updateString = substr($updateString, 0, strlen($updateString) - 2);
            $updateString .= ' WHERE ' . $recordId;      
            $stmt = $this->dbh->prepare($updateString);
            try 
            {
                $stmt->execute();
            } catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }
            
            $this->dbh = null;
        }
        
        // Removing a row from the table.
        public function Remove($tableName, $condition)
        {
            $this->_connectToDataBase();
            $removeString = 'DELETE FROM ' . $tableName . ' ' . $condition;
            $stmt = $this->dbh->prepare($removeString);
            try
            {
                $stmt->execute();
            }
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }
            $this->dbh = null;
        }
        
        // Select all record from selected table.
        public function SelectAll($tableName)
        {
            $this->_connectToDataBase();
            $stmt = $this->dbh->prepare("SELECT * FROM " . $tableName);
            try 
            {
                if($stmt->execute())
                {
                    while($row = $stmt->fetch())
                    {
                        $rows[] = $row;
                    }
                };
            }
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }

            $this->dbh = null;
            return $rows;
        }
        
        public function SelectAllBySearch($tableName, $condition)
        {
            $this->_connectToDataBase();
            $rows = array();
            $stmt = $this->dbh->prepare("SELECT * FROM " . $tableName . ' ' . $condition);
            try 
            {
                if($stmt->execute())
                {
                    while($row = $stmt->fetch())
                    {
                        //print_r($row);
                        //echo "<br><br><br><br>";
                        $rows[] = $row;
                    }
                };
            }
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }

            $this->dbh = null;
            return $rows;
        }
        
        public function SelectSingleRow($tableName, $condition)
        {
            $this->_connectToDataBase();
            $stmt = $this->dbh->prepare("SELECT * FROM " . $tableName . ' ' . $condition);
            try
            {
                $stmt->execute();
                $row = $stmt->fetch();
            }
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }
            
            $this->dbh = null;
            return $row;
        }
        
        // packing parameters.
        private function prepareParams($params, &$columns, &$values)
        {
            $columns = '';
            $values = '';
            foreach($params as $key => $val)
            {
                $columns .= ($key . ',');
                $values .= ('\'' . $val . '\'' . ',');
            }
            
            $columns = substr($columns, 0, strlen($columns) - 1);
            $values = substr($values ,0, strlen($values) - 1);
        }
        
        // connecting to the database.
        public function _connectToDataBase()
        {
            try 
            {
                $this->dbh = new PDO('mysql:host=' . constant('DB_HOST') . ';dbname='. constant('DB_NAME'),
                                constant('DB_LOGIN'), 
                                constant('DB_PASSWORD'));
            } 
            catch(PDOException $e)
            {
                echo 'Error: ' . $e . '!';
            }
        }
        
    }