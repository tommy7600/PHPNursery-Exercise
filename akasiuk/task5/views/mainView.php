<?php
if (!defined('INCLUDED'))
{
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task 5</title>

        <meta charset="utf-8">

        <link href="media/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            <form method="post" class="well form-inline">
                <input type="hidden" name="action" value="search">
                <input type="text" class="input-medium" name="name" placeholder="Imię">
                <input type="text" class="input-medium" name="surname" placeholder="Nazwisko">
                <input type="text" class="input-medium" name="pesel" placeholder="PESEL">
                <input type="text" class="input-medium" name="email" placeholder="E-mail">
                <button class="btn btn-primary" type="submit"><i class="icon-search icon-white"></i> Szukaj</button>
                <?php
                    if ($searchActive)
                    {
                        ?>
                            <button class="btn btn-warning" type="submit" name="clear" value="clear"><i class="icon-remove icon-white"></i> Wyczyść filtr</button>
                        <?php
                    }
                ?>
            </form>

            <?php
            
            if (isset($errorMessage))
            {
                ?>
            
                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $errorMessage; ?>
                </div>
            
                <?php
            }
            
            ?>
            
            <table class="table table-condensed">
                <tr>
                    <th>ID</th>
                    <th>Rola</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>PESEL</th>
                    <th>Adres</th>
                    <th>Kod pocztowy</th>
                    <th>Telefon</th>
                    <th>E-mail</th>
                    <th>Data dodania</th>
                    <th>Akcje</th>
                </tr>
                <?php
                if (count($users) > 0)
                {
                    foreach ($users as $user)
                    {
                        echo '<tr>';
                        echo '  <td>' . $user->GetId() . '</td>';
                        echo '  <td>' . $user->GetRole()->GetName() . '</td>';
                        echo '  <td>' . $user->GetName() . '</td>';
                        echo '  <td>' . $user->GetSurname() . '</td>';
                        echo '  <td>' . $user->GetPESEL() . '</td>';
                        echo '  <td>' . $user->GetAddress() . '</td>';
                        echo '  <td>' . $user->GetPostalCode() . '</td>';
                        echo '  <td>' . $user->GetPhone() . '</td>';
                        echo '  <td>' . $user->GetEmail() . '</td>';
                        echo '  <td>' . $user->GetJoinDate() . '</td>';
                        ?>
                        <td class="btn-group">
                                <form method="post" class="pull-right">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?php echo $user->GetId() ?>">
                                    <button class="btn btn-danger btn-mini" type="submit">
                                        <i class="icon-remove icon-white"></i>
                                    </button>
                                </form>
                                <form method="post" class="pull-right">
                                    <input type="hidden" name="action" value="edit">
                                    <input type="hidden" name="id" value="<?php echo $user->GetId() ?>">
                                    <button class="btn btn-warning btn-mini" type="submit">
                                        <i class="icon-pencil icon-white"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    echo '<tr><td colspan="10" class="muted">Brak użytkowników</td></tr>';
                }
                ?>
            </table>

            <form method="post" class="well span6 offset3 form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="role">Rola</label>
                    <div class="controls">
                        <select name="role" id="role">
                            <?php
                            foreach ($roles as $role)
                            {
                                echo '<option value="' . $role->GetId() . '"' . ((isset($editedUser) && $editedUser->GetRole()->GetId() == $role->GetId()) ? 'selected="selected"' : '') . '>' . $role->GetName() . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="name">Imię</label>
                    <div class="controls">
                        <input type="text" name="name" id="name" placeholder="Imię"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetName() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="surname">Nazwisko</label>
                    <div class="controls">
                        <input type="text" name="surname" id="surname" placeholder="Nazwisko"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetSurname() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="pesel">PESEL</label>
                    <div class="controls">
                        <input type="text" name="pesel" id="pesel" placeholder="PESEL"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetPESEL() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="address">Adres</label>
                    <div class="controls">
                        <textarea type="text" name="address" id="address" placeholder="Adres"><?php if (isset($editedUser)) echo $editedUser->GetAddress(); ?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="postalCode">Kod pocztowy</label>
                    <div class="controls">
                        <input type="text" name="postalCode" id="postalCode" placeholder="Kod pocztowy"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetPostalCode() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="phone">Telefon</label>
                    <div class="controls">
                        <input type="text" name="phone" id="phone" placeholder="Telefon"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetPhone() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" name="email" id="email" placeholder="E-mail"<?php if (isset($editedUser)) echo ' value="' . $editedUser->GetEmail() . '"'; ?>>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php
                        if (isset($editedUser))
                        {
                            ?>
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?php echo $editedUser->GetId() ?>">
                            <button class="btn btn-warning" type="submit"><i class="icon-pencil icon-white"></i> Zapisz</button>
                            <?php
                        }
                        else
                        {
                            ?>
                            <input type="hidden" name="action" value="add">
                            <button class="btn btn-success" type="submit"><i class="icon-plus icon-white"></i> Dodaj</button>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="media/js/bootstrap.min.js"></script>
    </body>
</html>
