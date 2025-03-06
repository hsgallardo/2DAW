<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Formulario para Subir Imagen</h1>
    <form action="subirImagen.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" name="imagen" id="imagen">
        <br><br>
        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>


