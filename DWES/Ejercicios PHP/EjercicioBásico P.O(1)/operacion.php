<?php
    class Operacion{

        public function operacion($num1,$num2,$operando){
            if($num2 > $num1){
                $aux = $num2;
                $num2 = $num1;
                $num1 = $aux;
            }
            switch($operando){
                case '+':
                    return $num1 + $num2;
                    break;
                case '-':
                    return $num1 - $num2;
                    break;
                case '*':
                    return $num1 * $num2;
                    break;
                case '/':
                    return $num1 / $num2;
            }
        }
    }