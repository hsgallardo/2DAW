<?php
session_start();
require_once '../controladores/CInicioSesion.php';

$mensaje_error = ""; // Variable para el mensaje de error

if (isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $controlador = new CInicioSesion();

    // Comprobar si el inicio de sesión es correcto
    if ($controlador->cComprobarSesion($correo, $password)) {
        header('Location: inicio.php');  // Redirige al menú principal
        exit();
    } else {
        $mensaje_error = "Correo o contraseña incorrectos."; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <a href="inicio.php" class="inicio-link">Inicio</a>
        <form method="POST" action="login.php">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            
            <button type="submit">Iniciar sesión</button>
        </form>

        <?php if ($mensaje_error != "") { ?>
            <div class="message error"><?php echo $mensaje_error; ?></div>
        <?php } ?>
    </div>
</body>
</html>
