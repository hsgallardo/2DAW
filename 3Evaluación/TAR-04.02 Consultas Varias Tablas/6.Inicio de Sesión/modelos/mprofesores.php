<?php
class Mprofesores {
    private $conexion;

    public function __construct() {
        require_once("conexion.php");
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    }

    // Registrar un profesor 
    public function registrar_profesor($nombre, $correo, $password) {
        $sql = "INSERT INTO usuarios (nombre, correo, pw, perfil) VALUES ('$nombre', '$correo', '$password', 'P')";
        return $this->conexion->query($sql);
    }

    // Borrar un usuario por ID 
    public function borrar_usuario($id) {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        return $this->conexion->query($sql);
    }

    // Obtener todos los profesores
    public function obtener_profesores() {
        $sql = "SELECT id, nombre, correo FROM usuarios WHERE perfil = 'P'";
        $resultado = $this->conexion->query($sql);

        $profesores = [];
        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $profesores[] = $fila;
            }
        }
        return $profesores;
    }
}
?>
