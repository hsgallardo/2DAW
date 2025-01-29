<?php
class Inscripcion {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para inscribir a un alumno en una prueba
    public function inscribirAlumno($idAlumno, $idPrueba) {

        $query = "INSERT INTO INSCRIPCIONES (idAlumno, idPrueba) VALUES ('$idAlumno', '$idPrueba')";

        // Ejecutamos la consulta
        $resultado = $this->conexion->query($query);

        if ($resultado) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
