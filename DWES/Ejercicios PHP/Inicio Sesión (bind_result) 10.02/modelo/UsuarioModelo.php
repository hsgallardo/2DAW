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

        $stmt->bind_result($id, $usuario_db);

        if ($stmt->fetch()) {
            $stmt->close();
            return ['id' => $id, 'usuario' => $usuario_db];
        }

        $stmt->close();
        return null;
    }
}
?>

<!--bind_result:Asigna los valores de las columnas a variables específicas.-->