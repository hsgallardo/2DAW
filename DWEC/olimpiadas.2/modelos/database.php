<?php
class Database {
    private $conexion;

 
    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'olimpiadas');
        $this->conexion->set_charset("utf8");

        if ($this->conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conexion->connect_error);
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function close() {
        $this->conexion->close();
    }
}
?>
