<?php
class Alumno {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para dar de alta un alumno
    public function altaAlumno($nombre, $idClase) {
        
        $query = "INSERT INTO ALUMNOS (nombre, idClase) VALUES ('$nombre', $idClase)";

        $resultado = $this->conexion->query($query);

        if ($resultado) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
