<?php

include_once('../modelos/database.php');
include_once('../modelos/Prueba.php');


$db = new Database();
$conexion = $db->getConexion();


$prueba = new Prueba($conexion);


if (isset($_POST['nombre'])) {
 
    $nombre = $_POST['nombre'];

    // Llamar al método altaPrueba del modelo para insertar los datos
    if ($prueba->altaPrueba($nombre)) {

        header('Location: ../vistas/prueba_form.php?exito=1');
        exit();
    } else {
        
        header('Location: ../vistas/prueba_form.php?exito=0');
        exit();
    }
}
?>
