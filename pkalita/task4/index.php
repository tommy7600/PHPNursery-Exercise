<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "Matematyka.php";
            echo 'Pole kola: '. Matematyka::CalculateCircleArea(3);
            echo '<br>';
            echo 'Obwod kola: '. Matematyka::CalculateCircleCircumference(3);
            echo '<br>';
            echo 'Funkcja liniowa: '. Matematyka::CalculateLinearFunc(5, 0.5, 10);
            echo '<br>';
            echo 'Funkcja kwadratowa: '. Matematyka::CalculateSquareFunc(5, 0.5, 10, 8);
            echo '<br>';
            echo 'Silnia: '. Matematyka::CalculateFactorial(4);
            echo '<hr>';
            echo 'Zaokraglone pole kola: '. Matematyka::Zaokr(Matematyka::CalculateCircleArea(3), 2);
            echo '<br>';
        ?>
    </body>
</html>
