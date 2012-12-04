<?php

class User
{
    private $_params;
    
    public function __construct($params)
    {
        $this->_params["id"] = $params["id"];
        $this->_params["role_id"] = $params["role_id"];
        $this->_params["role"] = Roles::getRoleById($params["role_id"])["name"];
        $this->_params["name"] = $params["name"];
        $this->_params["surname"] = $params["surname"];
        $this->_params["pesel"] = $params["pesel"];
        $this->_params["address"] = $params["address"];
        $this->_params["zipcode"] = $params["zipcode"];
        $this->_params["email"] = $params["email"];
        $this->_params["mobile"] = $params["mobile"];
        $this->_params["reg_date"] = $params["reg_date"];
        $this->_params["reg_date_formated"] = (new DateTime($params["reg_date"]))->format('Y-m-d');
    }
    
    public function getAllParams()
    {
        return $this->_params;
    }

    public static function getUsers($where)
    {
        $dbh = new PDOv2();
        $result = array();
        
        if (is_null($where))
            $stmt = $dbh->prepare("SELECT * FROM users ORDER BY id");
        else
            $stmt = $dbh->prepare("SELECT * FROM users WHERE name='" . $where . "' or surname='" . $where . "' or email='" . $where . "' or pesel='" . $where . "'");
            
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
                $result[$row['id']] = new User($row);
            }
        }
        
        $dbh = null;
        
        return $result;
    }
    
    public static function addUser($params)
    {
        $dbh = new PDOv2();
        
        $p['role_id'] = $params['role_id'];
        $p['name'] = $params['name'];
        $p['surname'] = $params['surname'];
        $p['pesel'] = $params['pesel'];
        $p['address'] = $params['address'];
        $p['zipcode'] = $params['zipcode'];
        $p['email'] = $params['email'];
        $p['mobile'] = $params['mobile'];
        $p['reg_date'] = date('Y-m-d', time());
        
        return $dbh->insert('users', $p);
    }

    public static function deleteUserById($id)
    {
        echo $id;
        $dbh = new PDOv2();
        
        $stmt = $dbh->prepare("DELETE FROM users WHERE id = '" . $id . "'");
        
        $dbh = null;
        
        return $stmt->execute();
    }
    
    public static function editUser($params)
    {
        $dbh = new PDOv2();
        
        $p['role_id'] = $params['role_id'];
        $p['name'] = $params['name'];
        $p['surname'] = $params['surname'];
        $p['pesel'] = $params['pesel'];
        $p['address'] = $params['address'];
        $p['zipcode'] = $params['zipcode'];
        $p['email'] = $params['email'];
        $p['mobile'] = $params['mobile'];
        
        return $dbh->update('users', $p, "id = '" . $params['id'] . "'");
    }
    
}

?>
