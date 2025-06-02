<?php
require_once "controladores/cetapas.php";
// Creo un objeto de la clase cetapas para acceder a sus métodos
$objetapas = new Cetapas();
//llamamos al metodo listar_etapas y cargamos el array que me devuelve el array $array_Etapas
$arrayEtapas = $objetapas->listar_etapas();
// Incluimos la vista que muestra el listado de etapas
require_once "vistas/vista_listado_etapas.php";

?>