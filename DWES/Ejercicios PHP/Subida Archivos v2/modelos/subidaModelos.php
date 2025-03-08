<?php
class SubidaModelo {
    function conectar() {
        $conexion = new mysqli("localhost", "root", "", "imagenes_db");
        if ($conexion->connect_error) {
            die("Error de conexión");
        }
        return $conexion;
    }

    function guardar($nombreArchivo) {
        $conexion = $this->conectar();
        $sql = "INSERT INTO imagenes (nombre) VALUES ('$nombreArchivo')";
        $conexion->query($sql);
        $conexion->close();
    }
}
?>
