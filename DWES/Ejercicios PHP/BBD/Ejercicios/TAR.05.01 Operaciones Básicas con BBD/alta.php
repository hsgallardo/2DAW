<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href ="estilo.css">
</head>
<body>

<h2>Agregar Alumno</h2>

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
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $edad = (int)$_POST['edad'];
    $email = $mysqli->real_escape_string($_POST['email']);

    // Insertar el nuevo alumno en la base de datos
    $sql = "INSERT INTO alumnos (nombre, edad, email) VALUES ('$nombre', $edad, '$email')";

    if ($mysqli->query($sql) === TRUE) {
        echo "<p>Nuevo alumno agregado exitosamente.</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $mysqli->error . "</p>";
    }
}

// Cerrar la conexión
$mysqli->close();
?>

<form method="POST" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <input type="submit" value="Agregar Alumno">
</form>
</body>
</html>
