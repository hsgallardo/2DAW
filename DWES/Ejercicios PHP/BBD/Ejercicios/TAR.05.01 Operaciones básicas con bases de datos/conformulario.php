<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alumnos</title>
</head>
<body>

<h2>Agregar Alumno</h2>
<form method="POST" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <input type="submit" value="Agregar Alumno">
</form>

<?php
// Conexión a la base de datos
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$basedatos = "prueba";

$mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

$controlador = new mysqli_driver();
$controlador-> report_mode = MYSQLI_REPORT_OFF;


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
        echo "Nuevo alumno agregado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}


// Muestra todos los alumnos
$sql = 'SELECT * FROM alumnos';
$resultado = $mysqli->query($sql);

// Tabla HTML
echo "<h2>Lista de Alumnos</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
        </tr>";

if ($resultado->num_rows > 0) {
    // Salida de los datos de cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila["id"] . "</td>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["edad"] . "</td>
                <td>" . $fila["email"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>0 resultados</td></tr>";
}

// Cierra tabla HTML
echo "</table>";

$mysqli->close();
?>

</body>
</html>

