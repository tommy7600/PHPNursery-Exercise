<?php
define('VAT23', 23);
define('VAT8', 8);
define('VAT0', 5);

function __autoload($class_name) {
    include 'classes/'. $class_name . '.php';
}

$tv   = new Tv('Tv2000', 'Samsung', 1200, VAT23);
$book = new Book('Book', 'sth', 25, VAT23);
$car  = new Car('Astra', 'Opel', 25000, VAT8);
$car2  = new Car('Insignia', 'Opel', 35000, VAT0);

$cart = new ShopCart();
$cart->addProduct($tv);
$cart->addProduct($book);
$cart->addProduct($car);
$cart->addProduct($car); 
$cart->addProduct($car2); 

echo 'Cena razem: '.$cart->totalPrice();
echo '<br><br>';

try{
	$cart->removeProduct(1);
}
catch (Exception $e)
{
	echo $e->getMessage();
}
foreach ( $cart->getAll() as $key => $value )
{
	echo 'Name: '.$value->name.'<br>';
	echo 'Manufacturer: '.$value->manufacturer.'<br>';
	echo 'Price netto: '.$value->priceNetto.'<br>';
	echo 'Price brutto: '.$value->priceBrutto.'<br>';
	echo 'VAT: '.$value->vat.'%<br>';
	echo 'Quantity: '.$value->quantity.'<br>';
	echo '<br>';
}

echo 'ilosc razem: '.$cart->quantity();