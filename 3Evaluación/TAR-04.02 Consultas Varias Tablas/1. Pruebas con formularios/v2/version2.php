<?php
if (!empty($_POST['nombre'])) {
    echo "<h1>Nombre de la actividad: " . $_POST['nombre'] . "</h1>";
} else {
    echo "El nombre de la actividad lo has puesto vacío.";
}

if (!empty($_POST['etapas'])) {
    echo "<h2>Etapas seleccionadas:</h2>";
    $resultado = [];

    foreach ($_POST['etapas'] as $id) {
        $nombre = $_POST['etapas_nombres'][$id];
        $resultado[] = ['id' => $id, 'nombre' => $nombre];
    }

    echo "<pre>";
    print_r($resultado);
    echo "</pre>";
} else {
    echo "<br>No se han seleccionado etapas.";
}
