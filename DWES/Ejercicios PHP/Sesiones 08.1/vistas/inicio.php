<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirige si no hay sesión activa
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/estilo.css">
    <title>Inicio</title>
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

    <main>
        <div class="container">
            <h1>Bienvenido, <?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario'; ?>!</h1>
            <p>Selecciona una opción en el menú para administrar tu cuenta.</p>
        </div>
    </main>
</body>
</html>
