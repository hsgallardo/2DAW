<?php
    require_once 'configDb.php'; 

    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); 
    $conexion->set_charset("utf8"); 
    $controlador = new mysqli_driver();
    $controlador->report_mode = MYSQLI_REPORT_OFF;
    $texto_error=$conexion->errno;
?>