<?php

class PageManager
{
    static public function GetMainData($db)
    {

        return $db->Select("users", "", "", "*", "JOIN", "roles", "users.u_role_id=roles.r_id", "ASC", "u_id");
    }

    static public function Search($db, $param, $keyword)
    {
        $keyword = "%" . $keyword . "%";

        $bind = array(
            ":keyword" => $keyword
        );

        return $db->Select('users', "" . $param . " LIKE :keyword", $bind, "*", "JOIN", "roles", "users.u_role_id=roles.r_id", "ASC", "u_id");
    }
}