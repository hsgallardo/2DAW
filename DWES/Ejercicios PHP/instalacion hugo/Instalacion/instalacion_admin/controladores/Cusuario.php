<?php
class Cusuario {
    private $objusuario;

    public function __construct() {
        require_once '../modelos/Musuario.php';
        $this->objusuario = new Musuario();
    }
    public function cNuevoUsuario($nombre,$contra,$correo) {
        $resultado = $this->objusuario->mNuevoUsuario($nombre,$contra,$correo);
        if ($resultado === true) {
            return "Consulta Correcta";
        } elseif ($resultado === "Csu") {
            return "Correo ya en uso";
        } elseif ($resultado === "No válido") {
            return "El usuario debe tener mas de 8 carácteres'";
        } else {
            return "Error en el registro";
        }
    }
}
?>