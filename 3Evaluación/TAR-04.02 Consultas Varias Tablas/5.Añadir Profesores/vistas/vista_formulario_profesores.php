<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestión de Profesores</title>
</head>
<body>
    <h2>Registrar nuevo profesor</h2>
    <form action="proceso_registrar_profesor.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre completo" required><br><br>
        <input type="email" name="correo" placeholder="Correo electrónico" required><br><br>
        <input type="password" name="password" placeholder="Contraseña" required><br><br>
        <input type="submit" value="Registrar Profesor">
    </form>

    <hr>

    <h2>Lista de Profesores</h2>

    <?php
        foreach($profesores as $profesor): ?>
        <div>
            <b>Nombre:</b> <?php echo $profesor['nombre'] ?><br>
            <b>Correo:</b> <?php echo $profesor['correo'] ?><br>
            <a href="./proceso_borrar_profesor.php?id=<?php echo $profesor['id']; ?>">Borrar</a>
        </div>
        <hr>
    <?php endforeach; ?>

</body>
</html>
