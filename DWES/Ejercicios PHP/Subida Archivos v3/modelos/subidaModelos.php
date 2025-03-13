<?php
class SubidaModelo {
    function conectar() {
        $conexion = new mysqli('localhost', 'root', '', 'imagenes_db');
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

    function existeArchivo($nombreArchivo) {
        $conexion = $this->conectar();
        $sql = "SELECT COUNT(*) AS total FROM imagenes WHERE nombre = '$nombreArchivo'";
        $resultado = $conexion->query($sql);
        $fila = $resultado->fetch_assoc();
        $conexion->close();

        return $fila['total'] > 0; // Devuelve true si el archivo ya existe
    }
}
?>