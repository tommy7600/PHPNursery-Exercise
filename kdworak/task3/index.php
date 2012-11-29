<?php
    include 'loader.php';
    
    $basket = new Basket;
    
    $book1 = new Book('book1', 100, 'producent1', 8, 1);
    $book2 = new Book('book2', 200, 'producent2', 5, 2);
    $phone = new Phone('phone1', 1200, 'phoneProducent', 20, 3);
    $computer1 = new Computer('computer1', 20000, 'IBM', 15, 4);
    $computer2 = new Computer('computer2', 20000, 'IBM', 15, 5);
    $computer3 = new Computer('computer3', 20000, 'IBM', 15, 6);
    $television = new Television('television1', 600, 'Sony', 10, 7);
    $chair1 = new Chair('chair1', 250, 'chairproducent1', 2, 8);
    $chair2 = new Chair('chair2', 350, 'chairproducent1', 2, 9);
    $chair3 = new Chair('chair3', 450, 'chairproducent1', 2, 10);
    $chair4 = new Chair('chair4', 550, 'chairproducent2', 2, 11);
    $chair5 = new Chair('chair5', 650, 'chairproducent2', 2, 12);
    
    $basket->AddToBasket($book1);
    
    $basket->AddToBasket($book2);
    $basket->AddToBasket($phone);
    
    $basket->AddToBasket($computer1);
    $basket->AddToBasket($computer2);
    $basket->AddToBasket($computer3);
    
    $basket->AddToBasket($television);
    
    $basket->AddToBasket($chair1);
    $basket->AddToBasket($chair2);
    $basket->AddToBasket($chair3);
    $basket->AddToBasket($chair4);
    $basket->AddToBasket($chair5);
    
    
    $basket->RemoveElementByName('book1');
    $basket->AddCountToProductByName('book2', 10);
    $basket->SubCountToProductByName('computer3', 5);
    
    echo 'Liczba elementow w koszyku: ' . $basket->GetTotalCount() . '<br>';
    echo 'Koszt koszyka: ' . $basket->GetTotalCost() . '<br>';
    
    echo '<h4>Koszyk</h4><br>';
    $basket->ShowAllItems();