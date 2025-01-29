<?php
// Incluir la base de datos y el modelo Alumno
include_once('../modelos/database.php');
include_once('../modelos/Alumno.php');

$db = new Database();
$conexion = $db->getConexion();

$alumno = new Alumno($conexion);

if (isset($_POST['nombre']) && isset($_POST['idClase'])) {

    $nombre = $_POST['nombre'];
    $idClase = $_POST['idClase'];

    // Llamar al método altaAlumno del modelo para insertar los datos
    if ($alumno->altaAlumno($nombre, $idClase)) {
        
        header('Location: ../vistas/alumno_form.php?exito=1');
        exit();
    } else {
        
        header('Location: ../vistas/alumno_form.php?exito=0');
        exit();
    }
}
?>
