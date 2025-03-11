<?php
class Cminijuego {
    private $objminijuego;
    public $vista;
    public function __construct() {
        require_once("modelos/Mminijuego.php");
        $this->objminijuego = new Mminijuego();
    }

    public function cInsertarMinijuego() {
        $this->vista = 'listar_ambitos';
        if (empty($_POST['nombre']) || !isset($_POST['ambitos'])|| !isset($_POST['etapas'])) {
            return "Faltan datos obligatorios";
        }
        $nombre = $_POST['nombre'];
        $idambito = $_POST['ambitos'];
        $etapas = $_POST['etapas'];
        $numetapas = count($etapas);

        $resultado = $this->objminijuego->mInsertarMinijuego($nombre, $idambito, $numetapas);

        if ($resultado === "csu") {
            return 'Nombre Duplicado';
        }
        
        if ($resultado === true) {
            return 'Insercion correcta';
        }

        return 'Error al insertar el minijuego';
    }
}
?>
