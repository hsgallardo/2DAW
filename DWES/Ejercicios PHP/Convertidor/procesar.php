<?php
// Recibir los datos del formulario
$valor = $_GET['valor'];  // Recibe el valor que el usuario quiere convertir
$unidad1 = $_GET['unidad1'];
$unidad2 = $_GET['unidad2'];

// Función para convertir unidades
function convertir($valor, $unidad1, $unidad2) {
    // Tabla de factores de conversión
    $factores = [
        'km' => 1000,   // 1 km = 1000 metros
        'm' => 1,       // 1 metro = 1 metro (unidad base)
        'cm' => 0.01    // 1 cm = 0.01 metros
    ];

    // Convertimos el valor a metros (unidad base)
    $valorEnMetros = $valor * $factores[$unidad1];
    // Multiplicamos el valor que llega con el factor de conversión de la unidad de origen


    // Convierte de metros a la unidad de destino
    $resultado = $valorEnMetros / $factores[$unidad2];

    return $resultado;
}

// Llama a la función y obtiene el resultado
$resultado = convertir($valor, $unidad1, $unidad2);

// Mostramos el resultado
echo "El resultado de convertir $valor $unidad1 a $unidad2 es: $resultado $unidad2";
?>