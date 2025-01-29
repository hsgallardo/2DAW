<?php
// Incluir la base de datos
include_once('../modelos/database.php');

// Crear una instancia de la clase Database para obtener la conexión
$db = new Database();
$conexion = $db->getConexion();

// Consulta para obtener las pruebas con los alumnos inscritos
$query = "SELECT p.nombre AS prueba, a.nombre AS alumno
          FROM PRUEBAS p
          LEFT JOIN INSCRIPCIONES i ON p.idPrueba = i.idPrueba
          LEFT JOIN ALUMNOS a ON i.idAlumno = a.idAlumno
          ORDER BY p.nombre, a.nombre";

// Ejecutamos la consulta
$resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Inscripciones</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Inscripciones de las Pruebas</h1>

    <?php

    if ($resultado->num_rows > 0) {
        // Inicializamos la variable para controlar las pruebas
        $pruebaActual = "";
        
        // Iterar sobre los resultados y mostrar las inscripciones organizadas por prueba
        while ($row = $resultado->fetch_assoc()) {
            // Si la prueba cambia, mostramos el nombre de la nueva prueba
            if ($row['prueba'] != $pruebaActual) {
                if ($pruebaActual != "") {
                    echo "</ul>"; // Cerrar la lista anterior
                }
                echo "<h2>" . $row['prueba'] . "</h2>"; // Nombre de la prueba
                echo "<ul>"; // Empezamos una nueva lista de alumnos
                $pruebaActual = $row['prueba']; // Actualizamos la prueba actual
            }

            // Mostrar el alumno que está inscrito en esta prueba
            echo "<li>" . ($row['alumno'] ? $row['alumno'] : "No hay alumnos inscritos") . "</li>";
        }
        echo "</ul>"; // Cerrar la última lista
    } else {
        echo "<p>No hay inscripciones registradas.</p>";
    }
    ?>

</body>
</html>
