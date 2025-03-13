<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    $resultado = $objminijuego->cModificarMinijuego();
    // Llama al método cModificarMinijuego() para modificar un minijuego

    header("Location: ".$objminijuego->vista.".php");
    // Redirige a la vista después de la modificación
?>
