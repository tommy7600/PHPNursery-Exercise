<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "Produkt.php";
            include "Batonik.php";
            include "Kompilator.php";
            include "Mysz.php";
            include "Napoj.php";
            include "Ser.php";
            include "Koszyk.php";
            include "KoszykItem.php";
            
            $Koszyk = new Koszyk();
            
            $Ser = new Ser();
            $Kompilator = new Kompilator();
            $Batonik = new Batonik();
            $Napoj = new Napoj();
            $Mysz = new Mysz();
            
            $Koszyk->AddProdukt($Batonik);
            $Koszyk->AddProdukt($Batonik);
            $Koszyk->AddProdukt($Batonik);
            $Koszyk->AddProductQuaintity(10, $Batonik);
            
            $Koszyk->AddProductQuaintity(50, $Ser);
            $Koszyk->RemoveProduct(20, $Ser);
            
            $Koszyk->AddProdukt($Napoj);
            $Koszyk->AddProdukt($Kompilator);
            $Koszyk->ListAll();
        ?>
    </body>
</html>
