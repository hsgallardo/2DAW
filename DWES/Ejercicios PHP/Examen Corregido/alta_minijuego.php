<?php
    require_once("controladores/Cminijuego.php");
    $objminijuego = new Cminijuego();
    $resultado = $objminijuego->cInsertarMinijuego();
    header("Location: ".$objminijuego->vista.".php");
    // echo $resultado;
    // echo '<a href="formulario_alta.php">Volver</a>';
    //Esto lo hice para que se viera el mensaje de error
?>
