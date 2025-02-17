<?php
class Cambito {
    private $objMminijuegos;

    public function __construct() {
        require_once '../modelos/Mminijuegos.php';
        $this->objMminijuegos = new Mminijuegos();
    }

    public function agregarAmbito($nombreAmbito) {
        return (!empty($nombreAmbito)) 
            ? $this->objMminijuegos->recogerAmbitos($nombreAmbito)
            : "El nombre del ámbito no puede estar vacío.";
    }
}
?>
