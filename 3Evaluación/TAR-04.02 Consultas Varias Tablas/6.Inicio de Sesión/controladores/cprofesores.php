<?php
class Cprofesores {
    private $objprofesores;

    public function __construct() {
        require_once("modelos/mprofesores.php");
        $this->objprofesores = new Mprofesores();
    }

    public function registrar_profesor() {
        if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['password'])) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($this->objprofesores->registrar_profesor($nombre, $correo, $password)) {
                return "Profesor registrado correctamente";
            } else {
                return "Error al registrar profesor";
            }
        }
    }

    public function borrar_usuario() {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->objprofesores->borrar_usuario($id)) {
                return "Usuario borrado correctamente";
            } else {
                return "Error al borrar usuario";
            }
        }
    }


    public function listar_profesores() {
        return $this->objprofesores->obtener_profesores();
    }
}
?>
