<?php
require_once "Conexion.php";

class UsuarioModelo {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function verificarUsuario($usuario, $password) {
        $sql = "SELECT id, usuario FROM usuarios WHERE usuario = ? AND password = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        return $resultado->fetch_assoc(); // Devuelve el usuario si existe, o null si no
    }
}
?>

<!--get_result:Devuelve un objeto mysqli_result, permitiendo usar fetch_assoc() para obtener los datos como un array.-->