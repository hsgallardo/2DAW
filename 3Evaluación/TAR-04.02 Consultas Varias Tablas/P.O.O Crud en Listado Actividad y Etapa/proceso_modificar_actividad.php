<?php
require_once("controladores/cactividad.php");

$objactividad = new Cactividad();
$mensaje = $objactividad->modificar_actividad();

require_once("vistas/mensaje_actividad.php")

?>