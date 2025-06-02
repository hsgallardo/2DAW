<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Actividades</title>
</head>
<body>
    <h2>Listado Actividades</h2>
    <a href="proceso_listado_etapas.php">Listado Etapas</a>
    <a href="proceso_formulario_alta_etapa.php">Añadir Etapa</a>
    <a href="./proceso_formulario_actividad.php">Alta Actividad</a><br><br>
    <?php
        foreach($arrayActividades as $actividades){
            echo "<li>" .$actividades['nombreActividad'];
            echo '<a href="./proceso_borrar_actividad.php?idactividad=' . $actividades['idactividad'] . '">Borrar</a>';
            echo '<a href="./proceso_formulario_modificar_actividad.php?idactividad=' . $actividades['idactividad'] . '">Modificar</a>';
        }
    ?>
</body>
</html>