<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="./proceso_formulario_registro.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br><br>

        <input type="text" name="correo" placeholder="Correo"><br><br>

        <input type="password" name="password" placeholder="Contraseña"><br>
        <input type="password" name="password2" placeholder="Repite la contraseña"><br><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>