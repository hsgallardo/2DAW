<?php
// Verifica si el usuario envió un valor en 'numero'
if (isset($_GET['numero'])) {

    // Guarda el número recibido desde el formulario en la variable $numero
    $numero = ($_GET['numero']); 

    // Inicializa la variable factorial con 1 (porque el factorial empieza multiplicando por 1)
    $factorial = 1;

    // Inicializa la variable $i en 1 (este será el contador para el bucle)
    $i = 1; 

    // Bucle while: mientras $i sea menor o igual que el número, seguirá multiplicando
    while ($i <= $numero) { 
        $factorial *= $i; // multiplica el factorial por el valor actual de $i
        $i++; // aumenta $i en 1 para pasar al siguiente número
    }

    // Muestra el resultado
    echo "<p>El factorial de $numero es: $factorial</p>";
}
?>
