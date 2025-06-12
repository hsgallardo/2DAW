<?php
require_once('controladores/cusuarios.php');
$objusuarios = new Cusuarios();

// Llamar al método comprobar_usuarios para saber si hay usuarios en la base de datos
$mensaje = $objusuarios->comprobar_usuarios();

// Si el mensaje indica que no hay usuarios registrados
if ($mensaje === "No hay usuarios") {
    // Cargar vista de registro si no hay suaurios
    require_once('vistas/vista_registro.php');
} else {
    // Cargar vista de inicio de sesión si ya hay usuarios
    require_once('vistas/vista_formulario_inicio_sesion.php');
}
?>