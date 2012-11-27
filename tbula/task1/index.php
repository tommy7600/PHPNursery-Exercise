<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            include_once 'Points.php';
            include_once 'Player.php';
            
            $player = new Player('Zdzisław', 'Sztacheta');
            $player->ModifyPoints(15);
            echo $player->GetPoints();
            echo '<br>';
            $player->ModifyPoints(-3);
            echo $player->GetPoints();
            echo '<br>';
            echo $player->__destruct();
        ?>
    </body>
</html>
