<?php

require_once('controladores/cprofesores.php');
$objprofesores = new Cprofesores();

// Obtener la lista actual de profesores (vacía al inicio)
$profesores = $objprofesores->listar_profesores();

// Aquí podrías mostrar mensajes si quieres (al inicio estará vacío)
// $mensaje = ''; 

require_once('vistas/vista_formulario_profesores.php');
?>