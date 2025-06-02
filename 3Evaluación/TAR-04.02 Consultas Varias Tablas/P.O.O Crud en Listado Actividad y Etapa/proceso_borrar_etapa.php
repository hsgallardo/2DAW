<?php
require_once("controladores/cetapas.php");

$objetapas = new cetapas();

// Llamamos al método sin parámetros, porque ya coge el id con $_GET['id']
$mensaje = $objetapas->borrar_etapa($idEtapa = $_GET['idetapa']);

require_once("vistas/mensaje_borrar.php");
?>
