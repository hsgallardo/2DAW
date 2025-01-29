<?php

include_once('../modelos/database.php');

$db = new Database();
$conexion = $db->getConexion();

$query = "SELECT * FROM CLASES";
$resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Alumno</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Dar de Alta un Alumno</h1>


    <form action="../controladores/AlumnoController.php" method="POST">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="idClase">Clase:</label>
        <select name="idClase" id="idClase">
            <?php
            // Mostrar todas las clases disponibles
            while ($row = $resultado->fetch_assoc()) {
                echo "<option value='" . $row['idClase'] . "'>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>

        <button type="submit">Guardar</button>
        <?php
    if (isset($_GET['exito']) && $_GET['exito'] == 1) {
        echo "<p>Alumno guardado correctamente.</p>";
    }
    ?>
    </form>
</body>
</html>
