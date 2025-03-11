<?php
Class Mambito {
    private $conexion;

    public function __construct() {
        require_once("config/configdb.php");
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);

        // Verifica la conexión
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function mMostrarAmbitos() {
        $SQL = "SELECT * FROM ambito";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->execute();
        $datos = $stmt->get_result();

        $resultado = [];
        while ($fila = $datos->fetch_assoc()) {
            $resultado[] = [
                "idambito" => $fila['idambito'],
                "nombre" => $fila['nombre']
            ];
        }
        return $resultado;
    }

    public function mModificarAmbito($nombre) {
        $SQL = "UPDATE ambito SET nombre = ? WHERE idambito = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("si", $nombre, $_SESSION['id']);
        $stmt->execute();
        return true;
    }

    public function mMostrarAmbitoid() {
        $SQL = "SELECT * FROM ambito WHERE idambito = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("i", $_SESSION['id']);
        $stmt->execute();
        $datos = $stmt->get_result();

        $resultado = [];
        while ($fila = $datos->fetch_assoc()) {
            $resultado[] = [
                "idambito" => $fila['idambito'],
                "nombre" => $fila['nombre']
            ];
        }
        return $resultado;
    }
}
?>