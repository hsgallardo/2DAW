<?php
require_once "configDb.php";

class Conexion {
    public static function conectar() {
        $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }
}
?>