<?php

include_once('../modelos/database.php');

$db = new Database();
$conexion = $db->getConexion();

$queryPruebas = "SELECT * FROM PRUEBAS";
$pruebasResultado = $conexion->query($queryPruebas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body>
    <h1>Formulario de Inscripción</h1>


    <form action="../controladores/InscripcionController.php" method="POST">
    <?php

    while ($rowPrueba = $pruebasResultado->fetch_assoc()) {
        echo "<div class='prueba-container'>";
        echo "<h3>" . $rowPrueba['nombre'] . "</h3>";

        $queryAlumnos = "SELECT * FROM ALUMNOS";
        $alumnosResultado = $conexion->query($queryAlumnos);

        // Mostrar el select de alumnos para cada prueba
        echo "<label for='idAlumno_" . $rowPrueba['idPrueba'] . "'>Alumno:</label>";
        echo "<select name='idAlumno_" . $rowPrueba['idPrueba'] . "' id='idAlumno_" . $rowPrueba['idPrueba'] . "'>";
        

        echo "<option value=''>Seleccione un alumno</option>";

        // Mostrar los alumnos
        while ($rowAlumno = $alumnosResultado->fetch_assoc()) {
            echo "<option value='" . $rowAlumno['idAlumno'] . "'>" . $rowAlumno['nombre'] . "</option>";
        }

        echo "</select>";
        echo "</div>"; 
    }
    ?>
    <button type="submit">Inscribirse</button>
    <?php
    if (isset($_GET['exito'])) {
        if ($_GET['exito'] == 1) {
            echo "<p class='success-message'>¡Inscripción realizada con éxito!</p>";
        } elseif ($_GET['exito'] == 0) {
            echo "<p class='error-message'>Hubo un error al inscribir al alumno. Inténtalo de nuevo.</p>";
        }
    }
    ?>
</form>

<script src="../assets/js/inscripcion.js" defer></script>




</body>
</html>
