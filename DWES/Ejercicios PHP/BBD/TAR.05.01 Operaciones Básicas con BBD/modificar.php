<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Alumnos</title>
    <link rel= "stylesheet" href="estilo.css">
</head>
<body>

<h2>Modificar Alumno</h2>

<?php
// Conexión a la base de datos
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$basedatos = "prueba";

$mysqli = new mysqli($servidor, $usuario, $contraseña, $basedatos);

// Manejar el envío del formulario para obtener datos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];

    // Obtener la información del alumno
    $stmt = $mysqli->prepare("SELECT nombre, edad, email FROM alumnos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $alumno = $resultado->fetch_assoc();
    } else {
        echo "<p>Alumno no encontrado.</p>";
    }
    $stmt->close();
}

// Manejar el envío del formulario para modificar datos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modificar'])) {
    $id = (int)$_POST['id'];
    $nombre = trim($_POST['nombre']);
    $edad = (int)$_POST['edad'];
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Validar los datos
    if ($edad <= 0) {
        echo "<p>La edad debe ser un número positivo.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email no válido.</p>";
    } else {
        // Actualizar el alumno en la base de datos
        $stmt = $mysqli->prepare("UPDATE alumnos SET nombre = ?, edad = ?, email = ? WHERE id = ?");
        $stmt->bind_param("sisi", $nombre, $edad, $email, $id);

        if ($stmt->execute()) {
            echo "<p>Datos del alumno modificados exitosamente.</p>";
        } else {
            echo "<p>Error al modificar los datos.</p>";
        }

        $stmt->close();
    }
}

// Obtener la lista de alumnos para el formulario de selección
$resultado = $mysqli->query("SELECT id, nombre FROM alumnos");

if ($resultado->num_rows > 0) {
    echo '<form method="POST" action="">';
    echo '<label for="id">Selecciona un alumno:</label>';
    echo '<select id="id" name="id" required>';
    while ($fila = $resultado->fetch_assoc()) {
        echo '<option value="' . $fila['id'] . '">' . htmlspecialchars($fila['nombre']) . '</option>';
    }
    echo '</select>';
    echo '<input type="submit" value="Seleccionar Alumno">';
    echo '</form>';
} else {
    echo "<p>No hay alumnos registrados.</p>";
}

// Si se ha seleccionado un alumno, mostrar su información en un formulario
if (isset($alumno)) {
    echo '<h3>Modificar Alumno</h3>';
    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="id" value="' . $id . '">';
    echo '<label for="nombre">Nombre:</label>';
    echo '<input type="text" id="nombre" name="nombre" value="' . htmlspecialchars($alumno['nombre']) . '" required><br>';
    echo '<label for="edad">Edad:</label>';
    echo '<input type="number" id="edad" name="edad" value="' . htmlspecialchars($alumno['edad']) . '" required><br>';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" id="email" name="email" value="' . htmlspecialchars($alumno['email']) . '" required><br>';
    echo '<input type="submit" name="modificar" value="Modificar Alumno">';
    echo '</form>';
}

// Cerrar la conexión
$mysqli->close();
?>

</body>
</html>
