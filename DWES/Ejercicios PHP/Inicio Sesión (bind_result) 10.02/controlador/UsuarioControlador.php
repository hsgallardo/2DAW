<?php
require_once "../modelo/UsuarioModelo.php";

class UsuarioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
    }

    public function login($usuario, $password) {
        $usuarioVerificado = $this->modelo->verificarUsuario($usuario, $password);
        if ($usuarioVerificado) {
            return "Inicio de sesión exitoso. Bienvenido " . $usuarioVerificado['usuario'];
        } else {
            return "Usuario o contraseña incorrectos.";
        }
    }
}
?>
