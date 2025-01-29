<?php
   function eliminarDirectorio($ruta) {
    if (!is_dir($ruta)) {
        return false; 
    }

    $archivos = array_diff(scandir($ruta), array('.', '..')); 

    foreach ($archivos as $archivo) {
        $rutaCompleta = $ruta . DIRECTORY_SEPARATOR . $archivo;
        if (is_dir($rutaCompleta)) {
            eliminarDirectorio($rutaCompleta); 
        } else {
            unlink($rutaCompleta); 
        }
    }

    return rmdir($ruta); 
}

$directorio = 'instalacion_admin'; 

if (eliminarDirectorio($directorio)) {
    echo "Directorio eliminado.";
} else {
    echo "Error al eliminar el directorio.";
}

?>