<?php // Este archivo procesa el formulario de alta de actividad

require_once("controladores/cactividad.php");// Incluyo la clase cactividad para poder usar sus métodos
$objActividad = new cactividad();// Creo un objeto de la clase cactividad para acceder a sus métodos

$objActividad->alta_actividad();//Ejecuta el método alta_actividad de la clase cactividad para dar de alta una actividad

// Guarda el mensaje en $mensaje, generado por el método alta_actividad del objActividad de la clase cactividad                   
$mensaje = $objActividad->msg;


require_once("vistas/mensaje_actividad.php");// Incluye el archivo que muestra el mensaje de éxito o error al usuario

?>

