<?php
/**
 * User: Kamil
 * Date: 05.12.12
 * Time: 19:00
 */
try {
    require_once("autoloader.php");
} catch (Exception $e) {
}
try
{
    $roleDAL = new RoleDAL();
    $userDAL = new UserDAL();
    $roles = $roleDAL->selectAll();
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'edit') {
            if (isset($_GET['id'])) {
                $user = $userDAL->selectById(intval($_GET['id']));
            }
        }
    }
    if (isset($_POST['action'])) {
        if($_POST['action'] == 'ADD')
        {
            $user = new User($_POST['id'],intval($_POST['role']),$_POST['pesel'],$_POST['name'],$_POST['lastname'],$_POST['address'],$_POST['postcode'],$_POST['email'],$_POST['phone'],$_POST['create_date']);
            $userDAL->updateUser($user);
            header("Location: index.php");
        }
    }
}
catch (Exception $e)
{
    echo('<script type="text/javascript">window.alert("'.$e->getMessage().'")</script>');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edytuj Uzytkownika</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <label for="name">Imie</label>
        <input id="name" type="text" name="name" value="<?php echo $user->getName()?>"><br>
        <label for="lastname">Nazwisko</label>
        <input id="lastname" type="text" name="lastname" value="<?php echo $user->getLastName()?>"><br>
        <label for="address">Adres</label>
        <input id="address" type="text" name="address" value="<?php echo $user->getAddress()?>"><br>
        <label for="postcode">Kod Pocztowy</label>
        <input id="postcode" type="text" name="postcode" value="<?php echo $user->getPostCode()?>"><br>
        <label for="pesel">Pesel</label>
        <input id="pesel" type="text" name="pesel" value="<?php echo $user->getPesel()?>"><br>
        <label for="phone">Telefon</label>
        <input id="phone" type="text" name="phone" value="<?php echo $user->getPhone()?>"><br>
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="<?php echo $user->getEmail()?>"><br>
        <label for="role">Rola</label>
        <select id="role" name="role">
            <?php
            $str='';
            foreach($roles as $role)
            {
                $str.='<option value="'.$role->GetId().'"';
                if($user->getRoleId()==$role->getId())
                    $str.=' selected="selected"';
                $str.= '>'.$role->GetName().'</option>';
            }
            echo $str;
            ?>
        </select><br>
        <input type="hidden" name="id" value="<?php echo $user->getId()?>">
        <input type="hidden" name="create_date" value="<?php echo $user->getCreatDate()?>">
        <input type="submit" name="action" value="ADD">
    </fieldset>
</form>
</body>
</html>