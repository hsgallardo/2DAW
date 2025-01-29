<?php
class Clase {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para dar de alta una clase
    public function altaClase($nombre, $idTutor) {

        $query = "INSERT INTO CLASES (nombre, idTutor) VALUES ('$nombre', $idTutor)";

        $resultado = $this->conexion->query($query);

        if ($resultado) {
            return true; 
        } else {
            return false; 
        }
    }
}
?>
