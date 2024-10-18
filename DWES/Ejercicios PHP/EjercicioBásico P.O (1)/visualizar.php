<?php
    require_once 'operacion.php';
      
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operando = $_POST['operando'];

    $objOpe1 = new operacion();
 

    echo 'El resultado de la operacion es : '.$objOpe1->__operacion($num1,$num2,$operando);