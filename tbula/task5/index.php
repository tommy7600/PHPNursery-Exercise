<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
           include 'Meth.php';
           
           echo Meth::CircleArea(3,2);
           echo '<br>';
           echo Meth::CircleArea(3,-12);
           echo '<br>';
           
           echo Meth::CircleCircumference(3, 2);
           echo '<br>';
           echo Meth::CircleCircumference(3, -12);
           echo '<br>';
           
           echo Meth::Factorial(3, 2);
           echo '<br>';
           echo Meth::Factorial(3,-12);
           echo '<br>';
           
           echo Meth::LinearFunction(3, 4, 5, 2);
           echo '<br>';
           echo Meth::LinearFunction(3, 4, 5, -12);
           echo '<br>';
           
           $x1 = 0;
           $x2 = 0;
           try
           {
            Meth::QuadraticFunction($x1, $x2, 3, 9, 5, 2);
            echo $x1. ' ' .$x2;
            echo '<br>';
            Meth::QuadraticFunction($x1, $x2, 3, 4, 5, -12);
            echo $x1. ' ' .$x2;
            echo '<br>';
           }
            catch (Exception $ex)
            {
                echo $ex->getMessage();
            }
       ?>
    </body>
</html>
