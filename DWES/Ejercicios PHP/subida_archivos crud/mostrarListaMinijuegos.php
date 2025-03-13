<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    // Llama al método cMostrarMinijuego() para obtener los datos de los minijuegos
    $resultado = $objminijuego->cMostrarMinijuego();
    // Carga la vista para mostrar los minijuegos
    require_once("vistas/" . $objminijuego->vista . ".php");
?>
