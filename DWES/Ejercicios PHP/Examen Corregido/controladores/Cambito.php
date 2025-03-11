<?php
Class Cambito {
    private $objambito;
    public $vista;

    public function __construct() {
        require_once("modelos/Mambito.php");
        $this->objambito = new Mambito();
    }

    public function cMostrarAmbitos() {
        $this->vista = 'mostrarAmbitos';
        $resultado = $this->objambito->mMostrarAmbitos();
        if (is_array($resultado)) {
            return $resultado;
        }
    }

    public function cMostrarAmbitosAlta() {
        $this->vista = 'formAltaMinijuego';
        $resultado = $this->objambito->mMostrarAmbitos();
        if (is_array($resultado)) {
            return $resultado;
        }
    }

    public function cMostrarAmbitoid() {
        session_start();
        $_SESSION['id'] = $_GET['id'];
        $this->vista = 'formModificarAmbito';
        $resultado = $this->objambito->mMostrarAmbitoid();
        if (is_array($resultado)) {
            return $resultado;
        }
    }

    public function cModificarAmbito() {
        session_start();
        $this->vista = 'listar_ambitos';
        if (empty($_POST['nombre'])) {
            return "Faltan datos obligatorios";
        }
        $nombre = $_POST['nombre'];
        $resultado = $this->objambito->mModificarAmbito($nombre);
        return $resultado;
    }
}
?>