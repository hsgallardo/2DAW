<?php //Este archivo me muestra el formulario de alta de actividad

require_once("controladores/cetapas.php");// Incluyo la clase cetapas para poder usar sus métodos
$objetapas = new cetapas();// Creo un objeto de la clase cetapas para acceder a sus métodos
$arrayEtapas = $objetapas->listar_etapas();//llamo al método listar_etapas para obtener las etapas
require_once("vistas/vista_formulario_alta_actividad.php");//contiene el HTML del formulario donde se dará de alta la actividad


?>
