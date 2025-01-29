<?php

include_once('../modelos/database.php');
include_once('../modelos/Clase.php');

$db = new Database();
$conexion = $db->getConexion();


$clase = new Clase($conexion);

// Verificar si se han enviado los datos
if (isset($_POST['nombre']) && isset($_POST['idTutor'])) {
    
    $nombre = $_POST['nombre'];
    $idTutor = $_POST['idTutor'];

    // Llamar al método altaClase del modelo para insertar los datos
    if ($clase->altaClase($nombre, $idTutor)) {
        
        header('Location: ../vistas/clase_form.php?exito=1');
        exit();
    } else {
        
        header('Location: ../vistas/clase_form.php?exito=0');
        exit();
    }
}
?>
