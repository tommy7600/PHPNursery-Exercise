<?php

define('INCLUDED', 1);

require('autoloader.php');

$searchActive = false;

if (isset($_POST['action'])) {
    try {
        switch ($_POST['action']) {
            case 'add':

                User::AddUser($_POST['role'], $_POST['name'], $_POST['surname'], $_POST['pesel'], $_POST['address'], $_POST['postalCode'], $_POST['phone'], $_POST['email']);

                break;
            case 'delete':

                User::DeleteUser($_POST['id']);

                break;
            case 'edit':

                $editedUser = User::SelectUser($_POST['id']);

                break;
            case 'update':

                User::UpdateUser($_POST['id'], $_POST['role'], $_POST['name'], $_POST['surname'], $_POST['pesel'], $_POST['address'], $_POST['postalCode'], $_POST['phone'], $_POST['email']);

                break;
            case 'search':

                if (!isset($_POST['clear'])) {
                    $users = User::FindUsers($_POST['name'], $_POST['surname'], $_POST['pesel'], $_POST['email']);
                    $searchActive = true;
                }

                break;
        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}

if (!isset($users)) {
    $users = User::SelectAllUsers();
}

$roles = Role::SelectAllRoles();

include('views/mainView.php');
?>
