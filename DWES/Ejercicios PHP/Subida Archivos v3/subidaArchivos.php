<?php
require_once 'controladores/subidaControlador.php';

$subidaControlador = new SubidaControlador();

// Comprueba si el formulario contiene un archivo
if (isset($_FILES['archivo'])) {
    // Si el archivo ha sido enviado llama al método subirArchivo
    $subidaControlador->subirArchivo($_FILES['archivo']);
}

require 'vistas/subir.php';
?>