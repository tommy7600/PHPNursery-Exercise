<?php
/**
 * User: Kamil
 * Date: 02.12.12
 * Time: 17:00
 */
class UserRowConverter
{
    public static function convertToUser(array $row)
    {
        return new User($row["id"],
                        $row["pesel"],
                        $row["role_id"],
                        $row["name"],
                        $row["lastname"],
                        $row["address"],
                        $row["postcode"],
                        $row["email"],
                        $row["phone"],
                        $row["create_date"]);
    }
}
