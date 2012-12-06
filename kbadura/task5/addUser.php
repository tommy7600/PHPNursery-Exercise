<?php
try {
    require_once("autoloader.php");
} catch (Exception $e) {
}
$roleDAL = new RoleDAL();
$userDAL = new UserDAL();
$roles = $roleDAL->selectAll();
if(isset($_POST['action']))
{
    if($_POST['action']=="ADD")
    {
        $user = new User(0,intval($_POST['role']),$_POST['pesel'],$_POST['name'],$_POST['lastname'],$_POST['address'],$_POST['postcode'],$_POST['email'],$_POST['phone'],date("Y-m-d"));
        $userDAL->insertUser($user);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Uzytkownika</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <input type="text" name="name">
        <input type="text" name="lastname">
        <input type="text" name="address">
        <input type="text" name="postcode">
        <input type="text" name="pesel">
        <input type="text" name="phone">
        <input type="text" name="email">
        <select name="role">
            <?php
            foreach($roles as $role)
                echo '<option value="'.$role->GetId().'">'.$role->GetName().'</option>'
            ?>
        </select>
        <input type="submit" name="action" value="ADD">
    </fieldset>
</form>
</body>
</html>