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
                        include 'Database.php';
                        $db = new Database('mysql:host=localhost;dbname=zad5', 'root', '', array(PDO::ATTR_PERSISTENT => true));


                        foreach ($db->select('users', '1=1') as $user)
                        {
                            ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['surname'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['PESEL'] ?></td>
                                <td><?php echo $user['adress'] ?></td>
                                <td><?php echo $user['post_code'] ?></td>
                                <td><?php echo $user['phone'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['role_id'] ?></td>
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