<?php

    include_once 'User.php';
    include_once 'RoleCommon.php';
    include_once 'UserCommon.php';

    if(isset($_GET['id']))
    {
        EditUser();
    }
    else
    {    
        AddNewUser();
    }

    function EditUser()
    {
        try
        {
            UserCommon::UpdateUser(SetUserData());
            header('Location:index.php');
        }
        catch (PDOException $ex)
        {
            header('Location:AddUser.php?error=DB save error');
        }
        catch (Exception $ex)
        {
            header('Location:AddUser.php?error='.$ex->getMessage());
        }
    }
    
    function AddNewUser()
    {
        try
        {
            UserCommon::SaveUser(SetUserData());
            header('Location:index.php');
        }
        catch (PDOException $ex)
        {
            header('Location:AddUser.php?error=DB save error');
        }
        catch (Exception $ex)
        {
            header('Location:AddUser.php?error='.$ex->getMessage());
        }
    }
    
    function SetUserData()
    {
        $user = new User();
        $user->SetAddress($_POST['address']);
        $user->SetBirthDate($_POST['birthDate']);
        $user->SetEmail($_POST['email']);
        $user->SetFirstName($_POST['firstName']);
        $user->SetPesel($_POST['pesel']);
        $user->SetPhone($_POST['phone']);
        $user->SetPostCode($_POST['postCode']);
        $user->SetSecondName($_POST['secondName']);
        $user->SetRole(RoleCommon::GetRoleById($_POST['roleId']));
        
        return $user;
    }
?>
