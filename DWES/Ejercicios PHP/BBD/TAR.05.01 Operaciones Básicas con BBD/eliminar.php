<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Alumnos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Eliminar Alumno</h2>

<?php
// Conexión a la base de datos
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$basedatos = "prueba";

$mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Manejar el envío del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];

    // Eliminar el alumno de la base de datos
    $sql = "DELETE FROM alumnos WHERE id = $id";

    if ($mysqli->query($sql) === TRUE) {
        echo "<p>Alumno eliminado exitosamente.</p>";
    } else {
        echo "<p>Error al eliminar alumno: " . $mysqli->error . "</p>";
    }
}

// Obtener la lista de alumnos
$resultado = $mysqli->query("SELECT id, nombre FROM alumnos");

if ($resultado->num_rows > 0) {
    echo '<form method="POST" action="">';
    echo '<label for="id">Selecciona un alumno:</label>';
    echo '<select id="id" name="id" required>';

    while ($fila = $resultado->fetch_assoc()) {
        echo '<option value="' . $fila['id'] . '">' . $fila['nombre'] . '</option>';
    }

    echo '</select>';
    echo '<input type="submit" value="Eliminar Alumno">';
    echo '</form>';
} else {
    echo "<p>No hay alumnos registrados.</p>";
}

// Cerrar la conexión
$mysqli->close();
?>

</body>
</html>
