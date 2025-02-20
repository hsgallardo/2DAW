<?php
class MInicioSesion {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function mComprobarSesion($correo, $password) {
        $SQL = "SELECT id, correo, password, nombre, telefono FROM usuarios WHERE correo = ? AND password = ?";
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("ss", $correo, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            
            $_SESSION['id'] = $usuario['id']; 
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['correo'] = $usuario['correo'];
            return true;
        } else {
            return false;
        }
    }

    public function mModificarDatos($nombre, $telefono) {
        if (!isset($_SESSION['id'])) {  
            return false;
        }

        $SQL = "UPDATE usuarios SET nombre = ?, telefono = ? WHERE id = ?";  
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("ssi", $nombre, $telefono, $_SESSION['id']);
        return $stmt->execute();
    }

    public function mCambiarContrasena($password) {
        if (!isset($_SESSION['id'])) {  
            return false;
        }

        $SQL = "UPDATE usuarios SET password = ? WHERE id = ?";  
        $stmt = $this->conexion->prepare($SQL);
        $stmt->bind_param("si", $password, $_SESSION['id']);
        return $stmt->execute();
    }
}
?>
