<?php
require_once("controladores/cactividad.php");
require_once("controladores/cetapas.php");



$idactividad = ($_GET['idactividad']);

$objactividad = new cactividad();
$actividad = $objactividad->consultar_actividad_id($idactividad);

$objetapas = new cetapas();
$arrayEtapas = $objetapas->listar_etapas();

$etapasSeleccionadas = $objactividad->obtener_etapas_de_actividad($idactividad);

require_once("vistas/vista_formulario_modificar_actividad.php");
