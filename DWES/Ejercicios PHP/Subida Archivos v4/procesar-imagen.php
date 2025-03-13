<?php
if (isset($_FILES['imagen'])) {
    // Extensiones permitidas
    $extensiones_permitidas = ['image/jpeg', 'image/png'];

    if (in_array($_FILES['imagen']['type'], $extensiones_permitidas)) {
        $directorio_subida = 'archivos/';
        $ruta_destino = $directorio_subida . basename($_FILES['imagen']['name']);

        // Verificar si el archivo ya existe
        if (file_exists($ruta_destino)) {
            echo "<p>La imagen ya existe en la carpeta. No se ha subido.</p>";
        } else {
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino)) {
                echo "<p>Imagen subida correctamente.</p>";
            } else {
                echo "<p>Error al subir la imagen.</p>";
            }
        }
    } else {
        echo "<p>Formato no permitido. Solo se aceptan imágenes JPG y PNG.</p>";
    }
} else {
    echo "<p>No se ha seleccionado ningún archivo.</p>";
}
?>
