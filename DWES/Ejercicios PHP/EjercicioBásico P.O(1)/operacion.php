<?php
    class Operacion{
        private $num1;
        private $num2;
        function __construct($num1,$num2) {
            if($num2 > $num1){
                $this->num2 = $num1;
                $this->num1 = $num2;
            } else {
                $this->num1 = $num1;
                $this->num2 = $num2;
            }
        }

        public function operacion($operando){
            
            switch($operando){
                case '+':
                    return $this->num1 + $this->num2;
                    break;
                case '-':
                    return $this->num1 - $this->num2;
                    break;
                case '*':
                    return $this->num1 * $this->num2;
                    break;
                case '/':
                    return $this->num1 / $this->num2;
            }
        }
    }