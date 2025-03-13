<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <form action="../subidaArchivos.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Subir">
    </form>
</body>
</html>