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
    <title>Alta de Clase</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Dar de Alta una Clase</h1>

    <form action="../controladores/ClaseController.php" method="POST">
        <label for="nombre">Nombre de la Clase:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="idTutor">Tutor:</label>
        <select name="idTutor" id="idTutor">
            <?php
            // Consultar los profesores (tutores)
            $query = "SELECT * FROM PROFESORES";
            $resultado = $conexion->query($query);
            // Mostrar los profesores disponibles
            while ($row = $resultado->fetch_assoc()) {
                echo "<option value='" . $row['idProfesor'] . "'>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>

        <button type="submit">Guardar</button>
        <?php
    if (isset($_GET['exito']) && $_GET['exito'] == 1) {
        echo "<p>Clase guardada correctamente.</p>";
    }
    ?>
    </form>
</body>
</html>
