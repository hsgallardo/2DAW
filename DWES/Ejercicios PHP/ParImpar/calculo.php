<?php   
    function parImpar($num){
        $cuadrado = $num * $num;      

    if($num % 2 == 0)
        header("location:par.php?num=$num&resultado=$cuadrado");
    else
        header("location:impar.php?num=$num&resultado=$cuadrado");
    }

    //Esto es lo mismo que hemos realizado arriba pero más abreviado, si es verdadera ejecuta par si es falsa ejecuta impar
    //$num % 2 == 0 ? header("location:par.php?num=$num&resultado=$cuadrado") : header("location:impar.php?num=$num&resultado=$cuadrado");

    //LLamada a la función.
    parImpar($_GET['Número']);
?>






