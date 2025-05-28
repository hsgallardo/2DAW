<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Etapas</title>
</head>
<body>
    <a href="proceso_formulario_actividad.php">Añadir Actividad</a>
    <a href="proceso_formulario_etapas.php">Añadir Etapa</a>
    <h1>Listado de Etapas</h1>
    <?php
        foreach ($arrayEtapas as $etapas){
            echo '<li>'.$etapas['nombreEtapa'] . '<br>';
        }
    ?>
</body>
</html>