<?php

class Roles
{
    public static function getRoles()
    {
        $dbh = new PDOv2();
        
        $stmt = $dbh->prepare("SELECT * FROM roles ORDER BY id");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
                $result[$row['id']] = $row['name'];
            }
        }
        
        return $result;
    }
    
    public static function getRoleById($id)
    {
        $dbh = new PDOv2();
        
        $stmt = $dbh->prepare("SELECT * FROM roles WHERE id = '" . $id . "'");
        if ($stmt->execute()) {
            return $stmt->fetch();
        }
        
        return null;
    }
}

?>
