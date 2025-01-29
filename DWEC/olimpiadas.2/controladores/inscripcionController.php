<?php

include_once('../modelos/database.php');
include_once('../modelos/Inscripcion.php');


$db = new Database();
$conexion = $db->getConexion();


$inscripcion = new Inscripcion($conexion);

$datos = json_decode(file_get_contents("php://input"), true);

if ($datos) {
    $exito = true; 

    foreach ($datos as $key => $value) {
        if (strpos($key, 'idAlumno_') === 0) {
            
            $idPrueba = str_replace('idAlumno_', '', $key);
            $idAlumno = $value;

            if (!empty($idAlumno) && !empty($idPrueba)) {
                $resultado = $inscripcion->inscribirAlumno($idAlumno, $idPrueba);
                if (!$resultado) {
                    $exito = false;
                }
            }
        }
    }

    echo json_encode(["exito" => $exito]);
} else {
    
    echo json_encode(["exito" => false, "mensaje" => "Datos no válidos"]);
}
?>
