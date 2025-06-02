<?php

require_once("controladores/cetapas.php");

$objetapas = new Cetapas();// Crea una instancia del controlador de etapas

$etapa = $objetapas->consultar_id();// Llama al método del controlador para obtener la etapa por su ID
 
require_once("vistas/vista_formulario_modificar_etapa.php");// Incluye la vista del formulario para modificar la etapa
?>