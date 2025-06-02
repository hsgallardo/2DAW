<?php
require_once("controladores/cetapas.php");

$objetapas = new Cetapas();
$mensaje = $objetapas->modificar_etapa();// Llama al método del controlador para modificar la etapa y guarda el mensaje

require_once("vistas/mensaje_modificar.php");
?>
