<?php
// Verificar si el archivo fue subido correctamente
if (isset($_FILES['imagen']) && $_FILES['imagen']) {
    $nombreArchivo = $_FILES['imagen']['name'];
    $tmpNombre = $_FILES['imagen']['tmp_name'];
    
    // Ruta del directorio donde se almacenarán las imágenes
    $directorioDestino = "imagenes/";

    // Define la ruta de destino del archivo usando el nombre completo
    $rutaDestino = $directorioDestino . $nombreArchivo;

    // Mueve el archivo de la ubicación temporal a la carpeta de destino
    if (move_uploaded_file($tmpNombre, $rutaDestino)) {
        echo "La imagen se ha subido correctamente: " . $nombreArchivo;
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "No se ha seleccionado ningún archivo o ha ocurrido un error.";
}
?>
