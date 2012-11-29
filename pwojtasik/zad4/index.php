<?php

function __autoload($class_name) {
    include 'classes/'. $class_name . '.php';
}

try {
	echo 'Circle area: '.Math::circleArea(20, 1).'<br>';
	echo 'Circumference of a circle: '.Math::circumferenceOfCircle(4, 1).'<br>';
	echo 'Funkcja liniowa: '.Math::linearFunction(2, 5, 8, 1).'<br>';
	echo 'Quadratic function: '.Math::quadraticFunction(2, 1, 4, 7, 1).'<br>';
	echo 'Factorial: '.Math::factorial(1);
}
catch (Exception $e)
{
	echo $e->getMessage();
}