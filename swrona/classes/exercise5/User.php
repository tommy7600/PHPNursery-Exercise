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

    public static function getUsers()
    {
        $dbh = new PDOv2();
        
        $stmt = $dbh->prepare("SELECT * FROM users ORDER BY id");
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
        
        $stmt = $dbh->prepare("INSERT INTO users (role_id,name,surname,pesel,address,zipcode,email,mobile,reg_date) VALUES (
            '" . $params['role_id'] . "',
            '" . $params['name'] . "',
            '" . $params['surname'] . "',
            '" . $params['pesel'] . "',
            '" . $params['address'] . "',
            '" . $params['zipcode'] . "',
            '" . $params['email'] . "',
            '" . $params['mobile'] . "',
            '" . date('Y-m-d', time()) . "'
            )");
        
        $dbh = null;
        
        return $stmt->execute($params);
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
        
        $stmt = $dbh->prepare("UPDATE users SET
            role_id='" . $params['role_id'] . "',
            name='" . $params['name'] . "',
            surname='" . $params['surname'] . "',
            pesel='" . $params['pesel'] . "',
            address='" . $params['address'] . "',
            zipcode='" . $params['zipcode'] . "',
            email='" . $params['email'] . "',
            mobile='" . $params['mobile'] . "'
            WHERE id = '" . $params['id'] . "'");
        
        $dbh = null;
        
        return $stmt->execute();
    }
    
}

?>
