<?php
// Verifica si el usuario envió un valor en 'numero'
if (isset($_GET['numero'])) {

    // Guarda el número recibido desde el formulario en la variable $numero
    $numero = ($_GET['numero']); 

    // Inicializa la variable factorial con 1 (porque el factorial empieza multiplicando por 1)
    $factorial = 1;

    // Bucle for: empieza desde 1 hasta el número ingresado, multiplicando cada vez
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i; // multiplica el factorial por el número actual de la iteración
    }

    // Muestra el resultado
    echo "<p>El factorial de $numero es: $factorial</p>";
}
?>
