<?php
require_once 'modelos/subidaModelos.php';

class SubidaControlador {
    function subirArchivo($archivo) {
        if (isset($archivo['name'])) {
            $nombreArchivo = $archivo['name'];
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION); // Obtiene la extensión del archivo

            // Validar que el archivo sea de tipo .jpg o .png
            if ($extension != 'jpg' && $extension != 'png') {
                echo "Solo se permiten archivos JPG y PNG.";
                return; 
            }

            // Verificar si el archivo ya existe en la base de datos
            $modelo = new SubidaModelo();
            if ($modelo->existeArchivo($nombreArchivo)) {
                echo "El archivo ya existe en la base de datos.";
                return;
            }

            // Donde se guardará la imagen
            $rutaDestino = 'imagenes/' . $nombreArchivo;

            // Mueve el archivo a /imagenes
            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                $modelo->guardar($nombreArchivo);
                echo "Archivo subido correctamente.";
            } else {
                echo "Hubo un error al mover el archivo.";
            }
        }
    }
}
?>