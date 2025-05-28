<?php
class Cetapas {
    private $objetapas;

    public function __construct() {
        require_once("modelos/metapas.php"); // Carga el modelo asociado a las etapas
        $this->objetapas = new Metapas(); // Crea el objeto de la clase Metapas
    }

    //metodo para listar las etapas desde la base de datos
    public function listar_etapas() {
        return $this->objetapas->listar_etapas();
    }

    // Método para insertar una nueva etapa en la base de datos
    public function alta_etapa() {
        $nombreEtapa=$_POST['nombreEtapa'];

        if(empty($nombreEtapa)){
            return "La etapa no puede estar vacía";
        }

        return $this->objetapas->alta_etapa($nombreEtapa);
    }
}
?>











