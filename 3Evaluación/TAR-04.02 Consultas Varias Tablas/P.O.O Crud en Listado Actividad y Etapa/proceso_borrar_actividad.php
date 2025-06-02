<?php
require_once("controladores/cactividad.php");

$objactividad = new cactividad();

// Llamamos al método sin parámetros, porque ya coge el id con $_GET['id']
$mensaje = $objactividad->borrar_actividad($idactividad = $_GET['idactividad']);

require_once("vistas/mensaje_borrar.php");
?>
