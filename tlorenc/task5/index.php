<?php
try {
    require_once("modules/autoloader.module.php");
} catch (Exception $e) {
    include ("content/error.php");
}
$db = new PDOExtended(Config::DB_DSN, Config::DB_USERNAME, Config::DB_PASSWORD);

if (isset($_GET['action'])) {
    try {
        switch ($_GET['action']) {
            case 'new':

                include ("content/addForm.php");

                break;

            case 'add':

                $userToAdd = new User($db);
                if (isset($_POST['u_id']) && !empty($_POST['u_id']))
                    $userToAdd->UpdateUser($_POST['u_id'], $_POST['u_name'], $_POST['u_surname'], $_POST['u_address'], $_POST['u_email'], $_POST['u_phone'], $_POST['u_pesel'], $_POST['u_role_id'], $_POST['u_post_code']);
                else
                    $userToAdd->AddUser($_POST['u_name'], $_POST['u_surname'], $_POST['u_address'], $_POST['u_email'], $_POST['u_phone'], $_POST['u_pesel'], $_POST['u_role_id'], $_POST['u_post_code']);

                unset($userToAdd);
                header("Location: index.php");

                break;

            case 'delete':

                $id = $_GET['id'];
                $userToDelete = new User($db);
                $userToDelete->DeleteUserById($id);
                unset($userToDelete);
                header("Location: index.php");

                break;

            case 'edit':

                include ("content/editForm.php");

                break;

            case 'search':

                if (isset($_POST['keyword']) && !empty($_POST['keyword']) && isset($_POST['param']) && !empty($_POST['param'])) {
                    $resource = PageManager::Search($db, $_POST['param'], $_POST['keyword']);
                    include("content/main.php");
                } else {
                    $resource = PageManager::GetAllUsers($db);
                    include("content/main.php");
                }

                break;
        }
    } catch (Exception $e) {
        include ("content/error.php");
    }
} else {
    $resource = PageManager::GetAllUsers($db);
    include("content/main.php");
}

$template = new Template('User Managment', 'template/html/main.html');
$template->setContent('{MAIN_CONTENT}', $content);
$template->display();

$db = null;
