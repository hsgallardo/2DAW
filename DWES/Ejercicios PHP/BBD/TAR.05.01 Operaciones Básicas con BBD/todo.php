<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Gestión de Alumnos</h2>

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

// Manejar el envío del formulario para agregar alumno
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $edad = (int)$_POST['edad'];
    $email = $mysqli->real_escape_string($_POST['email']);

    $sql = "INSERT INTO alumnos (nombre, edad, email) VALUES ('$nombre', $edad, '$email')";
    if ($mysqli->query($sql) === TRUE) {
        echo "<p>Nuevo alumno agregado exitosamente.</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $mysqli->error . "</p>";
    }
}

// Manejar el envío del formulario para modificar alumno
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modificar'])) {
    $id = (int)$_POST['id'];
    $nombre = trim($_POST['nombre']);
    $edad = (int)$_POST['edad'];
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if ($edad <= 0) {
        echo "<p>La edad debe ser un número positivo.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email no válido.</p>";
    } else {
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

// Manejar el envío del formulario para eliminar alumno
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    $id = (int)$_POST['id'];
    $sql = "DELETE FROM alumnos WHERE id = $id";
    if ($mysqli->query($sql) === TRUE) {
        echo "<p>Alumno eliminado exitosamente.</p>";
    } else {
        echo "<p>Error al eliminar alumno: " . $mysqli->error . "</p>";
    }
}

// Obtener la lista de alumnos para el formulario de selección
$resultado = $mysqli->query("SELECT id, nombre FROM alumnos");

?>

<!-- Formulario para agregar alumno -->
<h3>Agregar Alumno</h3>
<form method="POST" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>
    
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    
    <input type="submit" name="agregar" value="Agregar Alumno">
</form>

<!-- Formulario para modificar alumno -->
<?php if ($resultado->num_rows > 0): ?>
<h3>Modificar Alumno</h3>
<form method="POST" action="">
    <label for="id">Selecciona un alumno:</label>
    <select id="id" name="id" required>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <option value="<?php echo $fila['id']; ?>"><?php echo htmlspecialchars($fila['nombre']); ?></option>
        <?php endwhile; ?>
    </select>
    <input type="submit" value="Seleccionar Alumno">
</form>
<?php endif; ?>

<!-- Mostrar el formulario de modificación si se ha seleccionado un alumno -->
<?php if (isset($_POST['id'])): ?>
    <?php
    $id = (int)$_POST['id'];
    $stmt = $mysqli->prepare("SELECT nombre, edad, email FROM alumnos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
        $alumno = $resultado->fetch_assoc();
    ?>
    <h3>Modificar Alumno</h3>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($alumno['nombre']); ?>" required><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo htmlspecialchars($alumno['edad']); ?>" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($alumno['email']); ?>" required><br>
        
        <input type="submit" name="modificar" value="Modificar Alumno">
    </form>
    <?php
    }
    $stmt->close();
    endif; 
    ?>

<!-- Formulario para eliminar alumno -->
<?php if ($resultado->num_rows > 0): ?>
<h3>Eliminar Alumno</h3>
<form method="POST" action="">
    <label for="id">Selecciona un alumno:</label>
    <select id="id" name="id" required>
        <?php
        $resultado->data_seek(0); // Reiniciar puntero del resultado
        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['id'] . '">' . htmlspecialchars($fila['nombre']) . '</option>';
        }
        ?>
    </select>
    <input type="submit" name="eliminar" value="Eliminar Alumno">
</form>
<?php endif; ?>

<?php
// Cerrar la conexión
$mysqli->close();
?>

</body>
</html>
