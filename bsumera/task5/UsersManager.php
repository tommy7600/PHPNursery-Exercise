<?php

include Kohana::find_file('views', $content, 'php');
$this->template->content = $this->request->controller().'/'.$this->request->action();





include 'Database.php';
include 'User.php';

if (isset($_POST['addUser']))
    {
        //Validates email
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $user = new User();
            $user->setAddUserInfo();
            $user->saveUserToDatabase();
        }
    }
    
$users = array();

$db = new Database('mysql:host=localhost;dbname=zad5', 'root', '', array(PDO::ATTR_PERSISTENT => true));

$id = 1;
do
{
    $user = new User();
    $user->getUserFromDatabase($id);
    $userData = $user->getUserInfo();
    $users = $userData;
    $id++;
}
while ($userData['id'] != null)



?>



<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="description" content="Your own library">
        <meta name="keywords" content="key, key, key">

        <title> Users Manager </title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/extra.css" rel="stylesheet">

    </head>

    <body>
        
        <div class="container" id="wrapper">
                <table class="table table-bordered">
                    <thead>
                            <tr>
                                    <th>ID</th>
                                    <th>Surname</th>
                                    <th>Name</th>
                                    <th>PESEL</th>
                                    <th>Adress</th>
                                    <th>Post-code</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th> </th>
                            </tr>
                    </thead>
                    <tbody>
                            <?php

                            $db = new Database('mysql:host=localhost;dbname=zad5', 'root', '', array(PDO::ATTR_PERSISTENT => true));


                            foreach ($users as $columnName => $value)
                            {
                                ?>
                                <tr>
                                    <td><?php echo $users['id'] ?></td>
                                    <td><?php echo $users['surname'] ?></td>
                                    <td><?php echo $users['name'] ?></td>
                                    <td><?php echo $users['PESEL'] ?></td>
                                    <td><?php echo $users['adress'] ?></td>
                                    <td><?php echo $users['postCode'] ?></td>
                                    <td><?php echo $users['phone'] ?></td>
                                    <td><?php echo $users['email'] ?></td>
                                    <td><?php echo $users['roleId'] ?></td>
                                    <td><i class="icon-remove"></i><i class="icon-pencil"></i></td>
                                </tr>
                                <?php
                            }
                            ?>

                    </tbody>
                </table>

                <form class="form-inline" action = "add.php" method = "POST" enctype = "multipart/form-data">
                        <button class="btn btn-success pull-right" type="submit" name="add">
                                Add
                        </button>
                </form>
                
        </div>

        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
   