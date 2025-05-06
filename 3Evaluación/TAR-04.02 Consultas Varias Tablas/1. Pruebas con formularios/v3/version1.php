<?php
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    echo "<h1>Nombre de la actividad: $nombre</h1>";
} else {
    echo "El nombre de la actividad lo has puesto vacío.";
}

if (isset($_POST['etapas']) && !empty($_POST['etapas'])) {
    $etapas = $_POST['etapas'];
    echo "<h2>Etapas seleccionadas:</h2>";
    echo "<pre>";
    print_r([$etapas]);
    echo "</pre>";
} else {
    echo "No se han seleccionado etapas.";
}
?>