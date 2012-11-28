<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "Gracz.php";
            $gracz = new Gracz("Piotrek", "Bartela");
            $gracz->actualisePoints(6);
            unset($gracz);
        ?>
    </body>
</html>
