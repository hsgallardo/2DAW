<?php
class Cminijuegos {
    private $objMminijuegos;

    public function __construct() {
        require_once '../modelos/Mminijuegos.php';
        $this->objMminijuegos = new Mminijuegos();
    }

    // Cargar los ámbitos desde la base de datos
    public function cargarAmbitos() {
        return $this->objMminijuegos->obtenerAmbitos();
    }

    // Procesar la selección del formulario
    public function cargarMinijuegos($ambitosSeleccionados) {
        if (!empty($ambitosSeleccionados)) {
            return $this->objMminijuegos->obtenerMinijuegosPorAmbito($ambitosSeleccionados);
        }
        return [];
    }
}
?>
