<?php

    require_once('./controlador/cMinijuegos.php');

    $nombre = $_POST['nombre'];

    // Comprobar minijuego ya existe
    $objCMinijuegos = new CMinijuego();
    $existencia = $objCMinijuegos->comprobarNombreMinijuego($nombre);

    //SSi existe mensaje OK 
    if ($$existencia) {
        echo "Juego ya registrado.";
    } else {
        //Llama al método para añadirlo
        $objCMinijuegos->alta_minijuego($nombre);
    }
?>