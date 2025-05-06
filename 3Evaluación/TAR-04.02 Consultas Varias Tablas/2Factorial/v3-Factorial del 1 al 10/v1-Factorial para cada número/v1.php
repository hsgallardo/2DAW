<?php
// Bucle que recorre los números del 1 al 10
for ($numero = 1; $numero <= 10; $numero++) {

    // Inicializa la variable factorial con 1 (para empezar a multiplicar desde 1)
    $factorial = 1;

    // Bucle for: multiplica todos los números desde 1 hasta el número actual
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i; // multiplica el factorial por el número de la iteración
    }

    // Muestra el resultado del factorial de cada número
    echo "<p>El factorial de $numero es: $factorial</p>";
}
?>
