<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Actividad</title>
</head>
<body>

<a href="./proceso_formulario_etapas.php">Nueva Etapa</a>
<h2>Registro Alta Actividad</h2>
<form action="./proceso_alta_actividad.php" method="post">
    <input type="text" name="nombreActividad" placeholder="Nombre de la Actividad" >

    <select name="etapa" >
        <?php
        if (!empty($arrayEtapas)) {
            foreach ($arrayEtapas as $etapa) {
                echo '<option value="' . $etapa['idetapa'] . '">' . $etapa['nombreEtapa'] . '</option>';
            }
        } else {
            echo '<option value="">No hay etapas disponibles</option>';
        }
        ?>
    </select>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
