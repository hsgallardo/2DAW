<?php
require_once('controladores/Cprofesores.php');
$objprofesores = new Cprofesores();

$mensaje = $objprofesores->borrar_usuario();

$profesores = $objprofesores->listar_profesores();

require_once('vistas/vista_formulario_profesores.php');
?>
