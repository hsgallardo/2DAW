<?php
class Musuarios {
    private $conexion;

    public function __construct() {
        require_once("conexion.php");
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);        
    }

    // Método para comprobar si ya existen usuarios en la tabla usuarios
    public function comprobar_usuarios() {
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            // Verifica cuántas filas obtuvo la consulta
            if ($resultado->num_rows > 0) {
                return "Hay usuarios";
            } else {
                return "No hay usuarios";
            }
        }
    }

    // Método para registrar un nuevo administrador en la tabla usuarios
    public function registrar_admin($nombre, $correo, $password) {
        $sql = "INSERT INTO usuarios (nombre, correo, pw, perfil) VALUES ('$nombre', '$correo', '$password', 'A')";// 'perfil' se establece como 'A' para indicar que es administrado
        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            return "Admin dado de alta correctamente";
        } else {
            return "Error al dar de alta el admin: ";
        }
    }
}
?>
