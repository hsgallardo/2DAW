<?php
// Inicializa el número en 1 (empezamos desde el 1)
$numero = 1;

// Inicializa el factorial en 1 (el factorial de 0 o 1 es 1)
$factorial = 1;

// Bucle while: calcula y muestra el factorial de los números del 1 al 10
while ($numero <= 10) {

    // El factorial actual es el factorial anterior multiplicado por el número actual
    $factorial *= $numero;

    // Muestra el resultado del factorial del número actual
    echo "<p>El factorial de $numero es: $factorial</p>";

    // Pasa al siguiente número
    $numero++;
}
?>
