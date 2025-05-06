<?php
$array = ['ESO', 'BACHILLERATO', 'CF'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Version1</title>
</head>
<body>
    <form action="version1.php" method="post">
        <label for="actividad">Nombre Actividad:</label>
        <input type="text" name="nombre"><br>

        <label for="etapas">Etapas:</label><br>
        <?php
            foreach ($array as $etapa) {
                echo '<input type="radio" name="etapas" value="' . $etapa . '"> ' . $etapa . '<br>';
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>