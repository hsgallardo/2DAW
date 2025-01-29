<?php
class Prueba {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para dar de alta una prueba
    public function altaPrueba($nombre) {
 
        $query = "INSERT INTO PRUEBAS (nombre) VALUES ('$nombre')";

        $resultado = $this->conexion->query($query);

        if ($resultado) {
            return true; 
        } else {
            return false;
        }
    }
}
?>
