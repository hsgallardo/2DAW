<?php
class Cminijuegos {
    private $objMminijuegos;

    public function __construct() {
        require_once '../modelos/Mminijuegos.php';
        $this->objMminijuegos = new Mminijuegos();
    }

    public function cargarAmbitos() {
        return $this->objMminijuegos->obtenerAmbitos();
    }

    public function cargarMinijuegos($ambitosSeleccionados) {
        if (!empty($ambitosSeleccionados)) {
            return $this->objMminijuegos->obtenerMinijuegosPorAmbito($ambitosSeleccionados);
        }
        return [];
    }
}
?>
