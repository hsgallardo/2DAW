<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Actividad</title>
</head>
<body>
    <h2>Modificar Actividad</h2>
    <form action="./proceso_modificar_actividad.php" method="post">
        <input type="hidden" name="idactividad" value="<?php echo $actividad['idactividad']; ?>">
        <input type="text" name="nombreActividad" placeholder="Nombre actividad" value="<?php echo $actividad['nombreActividad']; ?>"><br><br>

        <?php
            foreach ($arrayEtapas as $etapa) {
                $checked = in_array($etapa['idetapa'], $etapasSeleccionadas) ? 'checked' : '';
                echo '<input type="checkbox" name="etapa[]" value="' . $etapa['idetapa'] . '" ' . $checked . '> ' . $etapa['nombreEtapa'] . '<br>';
            }
        ?>

        <br>
        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>