<?php 

require_once '../modelos/MInicioSesion.php';
require_once '../modelos/Conexion.php'; 

class CInicioSesion {
    private $objsesion;

    public function __construct() {
        // La sesión ya está iniciada antes de llamar a este constructor
        $db = new Conexion();
        $this->objsesion = new MInicioSesion($db->getConexion());
    }

    public function cComprobarSesion($correo, $password) {
        return $this->objsesion->mComprobarSesion($correo, $password);
    }

    public function cCambiarContrasena($password) {
        if (!isset($_SESSION['id'])) {  
            return "Error: No hay usuario en sesión.";
        }
        return $this->objsesion->mCambiarContrasena($password);
    }

    public function cModificarDatos($nombre, $telefono) {
        if (!isset($_SESSION['id'])) {  
            return "Error: No hay usuario en sesión.";
        }
        return $this->objsesion->mModificarDatos($nombre, $telefono);
    }
}
?>
