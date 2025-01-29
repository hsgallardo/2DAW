<?php

include_once('../modelos/database.php');


$db = new Database();
$conexion = $db->getConexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Prueba</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Dar de Alta una Prueba</h1>

    <form action="../controladores/PruebaController.php" method="POST">
        <label for="nombre">Nombre de la Prueba:</label>
        <input type="text" name="nombre" id="nombre" required>

        <button type="submit">Guardar</button>
        <?php
    if (isset($_GET['exito']) && $_GET['exito'] == 1) {
        echo "<p>Prueba guardada correctamente.</p>";
    }
    ?>
    </form>
</body>
</html>
