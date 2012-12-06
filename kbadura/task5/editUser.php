<?php
/**
 * User: Kamil
 * Date: 05.12.12
 * Time: 19:00
 */
$roles = $roleDAL->selectAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edytuj Uzytkownika</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <input type="text" name="name">
        <input type="text" name="lastname">
        <input type="text" name="addres">
        <input type="text" name="postcode">
        <input type="text" name="pesel">
        <input type="text" name="phone">
        <input type="text" name="email">
        <select>
            <?php
                foreach($roles as $role)
                echo '<option value="'.$role->GetId().'">'.$role->GetName().'</option>'
            ?>
        </select>
    </fieldset>
</form>
</body>
</html>