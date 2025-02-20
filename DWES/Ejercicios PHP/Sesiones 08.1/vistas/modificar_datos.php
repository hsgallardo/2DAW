<?php
session_start();
require_once '../controladores/CInicioSesion.php';

$mensaje_error = "";
$mensaje_exito = ""; 

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['nombre']) && isset($_POST['telefono'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    
    $controlador = new CInicioSesion();
    

    if ($controlador->cModificarDatos($nombre, $telefono)) {
        $mensaje_exito = "Datos modificados correctamente."; 
    } else {
        $mensaje_error = "Error al modificar los datos."; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/estilo.css">
    <title>Modificar Datos</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="cambiar_contrasena.php">Cambiar contraseña</a></li>
            <li><a href="modificar_datos.php">Modificar datos</a></li>
            <li><a href="cerrarsesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

    <div class="container">
        <a href="inicio.php" class="inicio-link">Inicio</a>
        <form method="POST" action="modificar_datos.php">
            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" value="" placeholder="Ingrese su nuevo nombre" required>
            
            <label for="telefono">Nuevo Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo isset($_SESSION['telefono']) ? $_SESSION['telefono'] : ''; ?>" required>
            
            <button type="submit">Modificar datos</button>
        </form>

        <!-- MMensaje de éxito si los datos se modificaron correctamente -->
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
