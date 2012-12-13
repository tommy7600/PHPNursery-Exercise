<?php
/**
 * User: kbadura
 * Date: 12/5/12
 * Time: 2:09 PM
 */
try {
    require_once("autoloader.php");
} catch (Exception $e) {
}

$userDal = new UserDAL();
$roleDal = new RoleDAL();

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        if (isset($_GET["id"]))
        {
            $userDal->delete(intval($_GET["id"]));
        }
    }
}

if(isset($_POST["search"]))
{
    $users = $userDal->find($_POST["name"], $_POST["lastname"], $_POST["pesel"], $_POST["email"]);
}
else
{
    $users = $userDal->selectAll();
}
$roles = $roleDal->selectAll();
$usersRole = UserRoleConverter::convertToUserRole($users,$roles)
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Opis strony zaleane 160 znaków">
    <meta name="keywords" content="key, key, key">
  <title>Szukaj Użytkownika</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
</head>
<body>

<form class="navbar-search" action="searchUser.php" method="post">
    <fieldset>
        <input type="text" id="name" name="name" placeholder="Imie" class="search-query">
        <input type="text" id="lastname" name="lastname" placeholder="Nazwisko" class="search-query">
        <input type="text" id="pesel" name="pesel" placeholder="Pesel" class="search-query">
        <input type="text" id="email" name="email" placeholder="Email" class="search-query">
        <input type="submit" name="search" value="Szukaj" class="btn">
    </fieldset>
</form><br><br>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Imie</th>
                        <th>Nazwisko</th>
                        <th>Pesel</th>
                        <th>Email</th>
                        <th>Adres</th>
                        <th>Kod Pocztowy</th>
                        <th>Telefon</th>
                        <th>Rola</th>
                        <th>Akcje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($usersRole))
                    {
                        foreach($usersRole as $val)
                        {
                            echo '<tr>
                                    <td class="center">'.$val->getUser()->getName().'</td>
                                    <td class="center">'.$val->getUser()->getLastName().'</td>
                                    <td class="center">'.$val->getUser()->getPesel().'</td>
                                    <td class="center">'.$val->getUser()->getEmail().'</td>
                                    <td class="center">'.$val->getUser()->getAddress().'</td>
                                    <td class="center">'.$val->getUser()->getPostCode().'</td>
                                    <td class="center">'.$val->getUser()->getPhone().'</td>
                                    <td class="center">'.$val->getRole()->getName().'</td>
                                    <td class="center">
                                        <a class="btn btn-info" href="editUser.php?action=edit&id='.$val->getUser()->getId().'">
                                            <i class="icon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="searchUser.php?action=delete&id='.$val->getUser()->getId().'">
                                            <i class="icon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="index.php" class="btn btn-link">Powrót</a>
</body>
</html>
