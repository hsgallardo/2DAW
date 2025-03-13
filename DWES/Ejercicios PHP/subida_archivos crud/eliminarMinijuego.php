<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    // Llama al método cBorrarMinijuego() para eliminar un minijuego
    $resultado = $objminijuego->cBorrarMinijuego();   
    header("Location: ".$objminijuego->vista.".php");
    // Redirige a la vista después de eliminar el minijuego
?>
