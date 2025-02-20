<?php
require_once "../Controladores/UsuarioControlador.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../assets/estilo.css">
</head>
<body>
    <div class="form-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" >
            </div>

            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" >
            </div>

            <button type="submit">Iniciar Sesión</button>
        </form>

        <?php
        if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
            $controlador = new UsuarioControlador();
            $mensaje = $controlador->login($_POST['usuario'], $_POST['password']);
            echo "<p class='mensaje'>" . $mensaje . "</p>";
        }
        ?>
    </div>
</body>
</html>

