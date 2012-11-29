<?php
include("class/Math.class.php");
$output = Math::circleArea(1.6,3);
echo $output . "<br>";
$output = Math::circumferenceOfACircle(1.6,2);
echo $output . "<br>";
$output = Math::factorial(3, 2);
echo "Factorial: " . $output . "<br>";
$output = Math::linearFunction(3, 3, 2);
echo $output . "<br>";
$output = Math::quadraticFunction(-1, -2, 4, 3);
echo $output . "<br>";
