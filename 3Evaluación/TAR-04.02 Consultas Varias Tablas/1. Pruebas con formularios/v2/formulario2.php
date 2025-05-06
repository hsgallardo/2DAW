<?php
$array = [
    ['id' => 1, 'nombre' => 'ESO'],
    ['id' => 2, 'nombre' => 'BACHILL'],
    ['id' => 3, 'nombre' => 'CICLO'],
]
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Versión 2 - Sin explode, igual a versión 1</title>
</head>
<body>
    <form action="version2.php" method="post">
        <label for="actividad">Nombre Actividad:</label>
        <input type="text" name="nombre"><br><br>

        <label for="etapas">Etapas:</label><br>
        <?php
            foreach ($array as $etapa) {
                echo '<input type="checkbox" name="etapas[]" value="' . $etapa['id'] . '"> ' . $etapa['nombre'] . '<br>';
                echo '<input type="hidden" name="etapas_nombres[' . $etapa['id'] . ']" value="' . $etapa['nombre'] . '">';
            }
        ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


