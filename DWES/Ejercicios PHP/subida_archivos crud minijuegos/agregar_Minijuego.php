<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    $resultado = $objminijuego->cInsertarMinijuego();
    // Llama al método cInsertarMinijuego() para insertar un nuevo minijuego
    header("Location: ".$objminijuego->vista.".php");
    // Redirige a la vista después de insertar el minijuego
?>
