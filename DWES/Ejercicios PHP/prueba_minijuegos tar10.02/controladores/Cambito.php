<?php
class Cambito {
    private $objMminijuegos;

    public function __construct() {
        require_once '../modelos/Mminijuegos.php';
        $this->objMminijuegos = new Mminijuegos();
    }

    public function agregarAmbito($nombreAmbito) {
        if (!empty($nombreAmbito)) {
            return $this->objMminijuegos->insertarAmbito($nombreAmbito); 
        }
        return "El nombre del ámbito no puede estar vacío.";
    }
}
?>
