<?php
class Cclase {
    private $objMclase;

    public function __construct() {
        require_once '../modelos/Mclases.php';
        $this->objMclase = new Mclases();
    }

    public function cBuscarClase() {
        return $this->objMclase->mBuscarClases();
    }

    public function cObtenerTodasLasPruebas() {
        return $this->objMclase->mObtenerTodasLasPruebas();
    }

    public function cInscribirAlumnoEnPrueba($idAlumno, $idPrueba) {
        return $this->objMclase->mInscribirAlumnoEnPrueba($idAlumno, $idPrueba);
    }
}

?>
