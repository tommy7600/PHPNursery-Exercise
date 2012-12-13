<?php


class User
{
        private $values;
        private $db;
	
        public function __construct()
        {
            //$this->db = new Database(Config::$dbConnectionInfo);
            $this->db = new Database('mysql:host=localhost;dbname=zad5', 'root', '', array(PDO::ATTR_PERSISTENT => true));

        }

	public function setAddUserInfo()
	{
            $this -> values = array('name' => $_POST['name'], 
                                    'surname' => $_POST['surname'], 
                                    'PESEL' => $_POST['pesel'], 
                                    'adress' => $_POST['road'].''.$_POST['city'], 
                                    'postCode' => $_POST['postCode'], 
                                    'phone' => $_POST['phone'], 
                                    'email' => $_POST['email'],
                                    'roleId' => 6);
	}
	
        public function setEditUserInfo()
	{
            $this -> values = array('name' => "'".$_POST['name']."'", 
                                    'surname' => "'".$_POST['surname']."'", 
                                    'PESEL' => $_POST['pesel'], 
                                    'adress' => "'".$_POST['road'].''.$_POST['city']."'", 
                                    'postCode' => "'".$_POST['postCode']."'", 
                                    'phone' => $_POST['phone'], 
                                    'email' => "'".$_POST['email']."'",
                                    'roleId' => 6);
	}
        
        
        
	public function saveUserToDatabase()
	{
            $this->db->insert('users', $this->values);
	}
        
        public function editUserFromDatabase()
        {
            $this->db->update('users', $this->values, 'id=5');
        }
        
        public function getUserFromDatabase($whereCondition)
        {
            $this -> values = $this->db->select('users', $whereCondition);
        }
        
        public function getUserInfo()
        {
            return $this->values; 
        }
}