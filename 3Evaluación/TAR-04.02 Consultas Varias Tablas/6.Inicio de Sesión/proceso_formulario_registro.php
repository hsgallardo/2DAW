<?php
require_once('controladores/cusuarios.php');
$objusuarios = new Cusuarios();
$mensaje = $objusuarios->registrar_admin();
require_once('vistas/vista_comprobar_inicio_sesion.php');
?>