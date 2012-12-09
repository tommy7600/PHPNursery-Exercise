<?php
/**
 * User: kbadura
 * Date: 12/5/12
 * Time: 10:04 AM
 */
class UserDAL
{
    public function selectAll()
    {
        $columns = $this->getAllColumnName();

        $db = new DalPDO();

        $users = array();

        $result = $db->selectAll("users", $columns);
        foreach($result as $val)
        {
            $users[] = new User($val[0], $val[1], $val[2], $val[3], $val[4], $val[5], $val[6], $val[7], $val[8], $val[9]);
        }

        return $users;
    }

    public function selectById($id)
    {
        $conditions = array("id"=>$id);

        $db = new DalPDO();
        $result = $db->select("users", $this->getAllColumnName(), $conditions)[0];
        $user = new User($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9]);
        return $user;
    }

    public function find($name, $lastname, $pesel, $email)
    {
        $conditions = array();
        if(strlen($name)>0)
        {
            $conditions["name"]=$name;
        }
        if(strlen($lastname)>0)
        {
            $conditions["lastname"]=$lastname;
        }
        if(strlen($pesel)>0)
        {
            if($this->validatePESEL($pesel))
            {
                $conditions["pesel"]=$pesel;
            }
            else
            {
                throw new Exception("Podano niepoprawny Pesel");
            }
        }
        if(strlen($email)>0)
        {
            if ($this->validateEmail($email))
            {
                $conditions["email"] = $email;
            }
            else
            {
                throw new Exception("Podano niepoprawny Email");
            }
        }

        $db = new DalPDO();

        $result = $db->select("users", $this->getAllColumnName(), $conditions);
        $users = array();

        foreach($result as $key => $val)
        {
            $users[]=new User($val[0], $val[1], $val[2], $val[3], $val[4], $val[5],  $val[6], $val[7], $val[8], $val[9]);
        }

        return $users;
    }

    public function updateUser(User $user)
    {
        $db = new DalPDO();
        if($this->validateUser($user))
        {
            $db->update("users", $this->prepareData($user), $user->getId());
        }
    }

    public function insertUser(User $user)
    {
        if($this->validateUser($user))
        {
            $db = new DalPDO();

            if(!$db->insert("users", $this->prepareData($user)))
            {
                throw new Exception("Nie udało się dodać rekordu do bazy");
            }
        }
    }

    public function delete($id)
    {
        $db = new DalPDO();
        $db->delete("users", $id);
    }

    public function getAllColumnName()
    {
        return array("id", "role_id", "pesel", "name", "lastname", "address", "postcode", "email", "phone", "create_date");
    }

    public function prepareData(User $user)
    {
        $columnValues = array();
        $columnValues["role_id"]=$user->getRoleId();
        $columnValues["pesel"]=$user->getPesel();
        $columnValues["name"]=$user->getName();
        $columnValues["lastname"]=$user->getLastName();
        $columnValues["address"]=$user->getAddress();
        $columnValues["postcode"]=$user->getPostCode();
        $columnValues["email"]=$user->getEmail();
        $columnValues["phone"]=$user->getPhone();
        $columnValues["create_date"]=$user->getCreatDate();

        return $columnValues;
    }

    public  function validateUser(User $user)
    {
        if(!$this->validatePESEL($user->getPesel()))
        {
            throw new Exception("Niepoprawny Pesel");
        }
        if(!$this->validateEmail($user->getEmail()))
        {
            throw new Exception("Niepoprawny email");
        }
        return true;
    }

    private function validateEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }

    private function validatePESEL($pesel)
    {
        if (preg_match('/^\d{11}$/', $pesel))
        {
            $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);

            $sum = 0;
            for ($i = 0; $i < 10; $i++)
            {
                $sum += $weights[$i] * $pesel[$i];
            }
            $int = 10 - $sum % 10;
            $checksum = ($int == 10) ? 0 : $int;

            if ($checksum == $pesel[10])
            {
                return true;
            }
            return false;
        }
        return false;
    }
}
