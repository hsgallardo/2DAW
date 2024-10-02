<?php


$nombre = isset($_GET["name"]) ? $_GET["name"] : '';
$email = isset($_GET["email"]) ? $_GET["email"] : '';
$telefono = isset($_GET["phone"]) ? $_GET["phone"] : '';
$mensaje = isset($_GET["message"]) ? $_GET["message"] : '';
$genero = isset($_GET["gender"]) ? $_GET["gender"] : '';
$informacion = isset($_GET["infor"]) ? $_GET["infor"] : [];  

echo "Nombre: $nombre<br>";
echo "Correo electrónico: $email<br>";
echo "Teléfono: $telefono<br>";
echo "Mensaje: $mensaje<br>";
echo "Género: $genero<br>";
echo "Información sobre desastres:<br>";

if (!empty($informacion)) { //Verifica si la variable $informacion no está vacía, empty() devuelve true si la variable está vacía,if se ejecutará solo si $informacion contiene algún valor.
    foreach ($informacion as $i => $valor) { //Si $informacion no está vacía, se utiliza un bucle foreach, $i $informacion no está vacía, se utiliza un bucle foreach
        echo $valor . '<br>'; //Dentro del bucle, se imprime el valor actual ($valor)
    }
} else { //Si $informacion está vacía, se ejecutará el bloque else.
    echo "No seleccionaste ninguna opción."; //En este caso, se imprime el mensaje "No seleccionaste ninguna opción." 
}







?>






















