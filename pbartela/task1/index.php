<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title></title>
    </head>
    <body>
        <?php
        
        // <editor-fold defaultstate="collapsed" desc="Klasa Gracz i Punktacja">
        include 'Gracz.php';
         $gracz = new Gracz('Kazimierz','Kajzerka');
         $gracz->dodajPunkty(4);
         $gracz->dodajPunkty(-4);
         $gracz->odejmijPunkty(2);
         $gracz->odejmijPunkty(-2);
         // </editor-fold>
         
        ?>
    </body>
</html>
