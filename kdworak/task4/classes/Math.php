<?php
    class Math{
        
        // METHODS
        public static function GetCircleArea($_radius, $_round){
            $result = pi() * ($_radius * $_radius);
            return round($result, $_round);
        }
        
        public static function GetCircleCircuit($_radius, $_round){
            $result = 2 * pi() * $_radius;
            return round($result, $_round);
        }
        
        public static function GetLineFunctionValue($_a, $_b, $_x, $_round){
            $result = $_a * $_x + $_b;
            return round($result, $_round);
        }
        
        public static function GetQuadraticFunctionValue($_a, $_b, $_c, $_x, $_round){
            $result = ($_a * ($_x * $_x)) + ($_b * $_x) + $_c;
            return round($result, $_round);
        }
        
        public static function GetFactorial($_size){
            $result = 1;
            for($i = 1; $i < $_size + 1; $i++){
                $result *= $i;
            }
            return $result;
        }
        
    }