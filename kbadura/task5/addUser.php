<?php
try {
    require_once("autoloader.php");
} catch (Exception $e) {
}
try
{
    $roleDAL = new RoleDAL();
    $userDAL = new UserDAL();
    $roles = $roleDAL->selectAll();
    if(isset($_POST['action']))
    {
        if($_POST['action']=="ADD")
        {
            $user = new User(0,intval($_POST['role']),$_POST['pesel'],$_POST['name'],$_POST['lastname'],$_POST['address'],$_POST['postcode'],$_POST['email'],$_POST['phone'],date("Y-m-d"));
            $userDAL->insertUser($user);
            header("Location: index.php");
        }
    }
}
catch(Exception $e)
{
    echo('<script type="text/javascript">window.alert("'.$e->getMessage().'")</script>');
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
        <label for="name">Imie</label>
        <input id="name" type="text" name="name"><br>
        <label for="lastname">Nazwisko</label>
        <input id="lastname" type="text" name="lastname"><br>
        <label for="address">Adres</label>
        <input id="address" type="text" name="address"><br>
        <label for="postcode">Kod Pocztowy</label>
        <input id="postcode" type="text" name="postcode"><br>
        <label for="pesel">Pesel</label>
        <input id="pesel" type="text" name="pesel"><br>
        <label for="phone">Telefon</label>
        <input id="phone" type="text" name="phone"><br>
        <label for="email">Email</label>
        <input id="email" type="text" name="email"><br>
        <label for="role">Rola</label>
        <select id="role" name="role">
            <?php
            foreach($roles as $role)
                echo '<option value="'.$role->GetId().'">'.$role->GetName().'</option>'
            ?>
        </select><br>
        <input type="submit" name="action" value="ADD">
    </fieldset>
</form>
</body>
</html>