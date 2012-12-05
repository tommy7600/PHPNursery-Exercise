<?php
/**
 * User: Kamil
 * Date: 02.12.12
 * Time: 15:44
 */
class UserRole
{
    protected $user;

    protected  $role;

    public function getRole()
    {
        return $this->role;
    }

    public function getUser()
    {
        return $this->user;
    }

    function __construct(Role $role,User $user)
    {
        $this->role = $role;
        $this->user = $user;
    }


}
