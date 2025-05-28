<?php
require_once("controladores/cetapas.php");// Incluyo la clase cetapas para poder usar sus métodos
$objEtapas = new cetapas();// Creo un objeto de la clase cetapas para acceder a sus métodos

// El resultado (mensaje de éxito o error) se guarda en la variable $mensaje
$mensaje=$objEtapas->alta_etapa();//llamo al método alta_etapa de la clase cetapas para dar de alta una etapa 


//require_once("vista_formulario_alta_etapa.php");
require_once("vistas/mensaje_etapas.php");// Incluye el archivo que muestra el mensaje de éxito o error al usuario
?>
