<?php
require_once 'modelos/subidaModelos.php';

class SubidaControlador {
    function subirArchivo($archivo) {
        if (isset($archivo['name'])) {
            $nombreArchivo = $archivo['name'];
            
            //Donde se guardará la imagen
            $rutaDestino = 'imagenes/' . $nombreArchivo;

            //Mueve el archvio a /imagenes
            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                //Crea instancia de SubidaModelo para subida a bbdd
                $modelo = new SubidaModelo();
                $modelo->guardar($nombreArchivo);
            } 
        }
    }
}
?>
