<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            include 'Product.php';
            include 'Item.php';
            include 'Basket.php';
            include 'Tax.php';
            include 'Tyskie.php';
            include 'Ciechan.php';
            include 'Lech.php';
            include 'Warka.php';
            include 'Zubr.php';

            $tyskie = new Tyskie();
            $lech = new Lech();
            $zubr = new Zubr();
            $ciechan = new Ciechan();
            $warka = new Warka();

            $basket = new Basket();
            $basket->AddItem($tyskie, 1);
            $basket->AddItem($lech, 1);
            $basket->AddItem($zubr, 1);
            $basket->AddItem($ciechan, 1);
            $basket->AddItem($warka, 1);

            echo $basket->GetOrderValue();
            echo '<br>';
            echo $basket->GetOrderedItemsCount();
            echo '<br>';
            $basket->RemoveItem($ciechan);
            $basket->ChangeQuantity($tyskie, 5);
            echo $basket->GetOrderedItemsCount();
       ?>
    </body>
</html>
