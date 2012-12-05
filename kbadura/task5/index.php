<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kamil
 * Date: 02.12.12
 * Time: 12:48
 */
try {
    require_once("autoloader.php");
} catch (Exception $e) {
    include ("content/error.php");
}

$userDal = new UserDAL();
$users = $userDal->selectAll();
$roleDal = new RoleDAL();
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

    <title>Admin dashboard</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <script src="assets/js/jquery-1.8.2.js"></script>
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
    <script src="assets/js/bootstrap-tour.js"></script>
    <script>
        $(document).ready(function(){
            $('#all').on('click', function(){
                $(".users").prop("checked", $(this).prop("checked"));
            });
        });
    </script>

</head>
    <body>
        <div class="page-header">
            <div class="row-fluid">
                <div class="span6">
                    <h1 style="margin-left: 5%">
                        Zadanie 5
                    </h1>
                </div>
            </div>
        </div>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav" role="navigation">
                    <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Wyświetl wszystkich</a></li>
                    <li><a href="addUser.php"><i class="icon-user icon-white"></i> Dodaj Użytkownika</a></li>
                    <li><a href="searchUser.php"><i class="icon-search icon-white"></i> Szukaj Użytkownika</a></li>
                </ul>
            </div>
        </div>
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
                                        <a class="btn btn-success" href="#">
                                            <i class="icon-zoom-in icon-white"></i>
                                            View
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="icon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="#">
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
    </body>
</html>