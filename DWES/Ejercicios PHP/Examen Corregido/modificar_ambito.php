<?php

    require_once('./controlador/cMinijuegos.php');

    $id = $_POST['idambito'];
    $nombre = $_POST['nombre'];
    
    $objCMinijuegos = new CMinijuego();
    $objCMinijuegos->modificarAmbito($id, $nombre);
?>