<?php

class PageManager
{
    static public function GetAllUsers($db)
    {

        return $db->Select('users', "", "", "*", "roles", "users.u_role_id=roles.r_id");
    }

    static public function Search($db, $param, $keyword)
    {
        $keyword = "%" . $keyword . "%";

        $bind = array(
            ":keyword" => $keyword
        );

        return $db->Select('users', "" . $param . " LIKE :keyword", $bind, "*", "roles", "users.u_role_id=roles.r_id");
    }
}
