<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    // Llama al método cMostrarMinijuegoModificar() para obtener los detalles del minijuego a modificar
    $resultado = $objminijuego->cMostrarMinijuegoModificar();
    // Carga la vista
    require_once("vistas/" . $objminijuego->vista . ".php");
?>
