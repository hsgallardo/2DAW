<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Archivos</title>
</head>
<body>
    <form action="subidaArchivos.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona el archivo a subir:</label></br><br>
            <input type="file" name="archivo"><br/><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>