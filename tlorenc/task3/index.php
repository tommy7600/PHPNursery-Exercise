<?php
require_once("modules/autoloader.module.php");

// Create products and shopping cart
$shoppingCart = new ShoppingCart();
$laptop = new Laptop(1,100,"Sony","Vaio",8,Tax::VATRATE_23,"iCore5","Windows 8",8096);
$hdd = new Hdd(2,100,"WD","Scorpio",1,Tax::VATRATE_23,"500 GB");
$speakers = new Speakers(23,100,"Genius","HD2000",1,Tax::VATRATE_23,"12 W");
$tv = new Tv(11,100,"Sony","Viera",1,Tax::VATRATE_8,65);
$cpu = new Cpu(121,100,"Intel","iCore5",1,Tax::VATRATE_0,"2 GHz");

// Add product to cart
$shoppingCart->addProduct($laptop);
$shoppingCart->addProduct($hdd);
$shoppingCart->addProduct($cpu);
$shoppingCart->addProduct($speakers);
$shoppingCart->addProduct($tv);

// Show and manipulate cart
$shoppingCart->showShoppingCart();

$shoppingCart->updateProductQuantity(1,9);
$shoppingCart->showShoppingCart();

$shoppingCart->updateProductQuantity(121,10);
$shoppingCart->showShoppingCart();

$shoppingCart->deleteProduct(11);
$shoppingCart->showShoppingCart();

$shoppingCart->updateProductQuantity(1,0);
$shoppingCart->showShoppingCart();

// Destroy all
unset($shoppingCart);
unset($cpu);
unset($hdd);
unset($speakers);
unset($laptop);
unset($tv);


