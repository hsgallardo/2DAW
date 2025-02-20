<?php
session_start();
require_once '../controladores/CInicioSesion.php';

$mensaje_error = "";
$mensaje_exito = ""; 

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['nueva_contrasena'])) {
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $controlador = new CInicioSesion();

    // Cambiar la contraseña
    if ($controlador->cCambiarContrasena($nueva_contrasena)) {
        $mensaje_exito = "Contraseña cambiada con éxito."; 
    } else {
        $mensaje_error = "Error al cambiar la contraseña."; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/estilo.css">
    <title>Cambiar Contraseña</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="cambiar_contrasena.php">Cambiar contraseña</a></li>
            <li><a href="modificar_datos.php">Modificar datos</a></li>
            <li><a href="cerrarsesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>
<body>
    <div class="container">
        <a href="inicio.php" class="inicio-link">Inicio</a>
        <form method="POST" action="cambiar_contrasena.php">
            <label for="nueva_contrasena">Nueva Contraseña:</label>
            <input type="password" name="nueva_contrasena" required>
            <button type="submit">Cambiar contraseña</button>
        </form>

        <!-- Mensaje de éxito si se cambió la contraseña -->
        <?php if ($mensaje_exito != "") { ?>
            <div class="message success"><?php echo $mensaje_exito; ?></div>
        <?php } ?>

        <!-- Mensaje de error si algo salió mal -->
        <?php if ($mensaje_error != "") { ?>
            <div class="message error"><?php echo $mensaje_error; ?></div>
        <?php } ?>
    </div>
</body>
</html>
