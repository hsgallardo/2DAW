<?php

require_once('controlador/cMinijuegos.php');

$objCMinijuegos = new CMinijuego();

// Método para obtener los ámbitos
$objCMinijuegos->listado_ambitos();
?>
