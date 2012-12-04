<?php
    include 'loader.php';

    echo 'Pole o promienu r = 5 wynosi ' . Math::GetCircleArea(5, 2) . ' <br>';
    echo 'Obwod o promienu r = 5 wynosi ' . Math::GetCircleCircuit(5, 2) . '<br>';
    echo 'Wartość funkcji liniowej dla a = 1, b = 2, x = 3 wynosi ' . Math::GetLineFunctionValue(1, 2, 3, 2) . '<br>';
    echo 'Wartość funckji kwadratowej dla a = 1, b = 2, c = 3, x = 4 wynosi ' . Math::GetQuadraticFunctionValue(1, 2, 3, 4, 2) . '<br>';
    echo 'Silnia z 4 wynosi ' . Math::GetFactorial(4) . ' <br>';