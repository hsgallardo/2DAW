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
        $nombreEtapa = $_POST['nombreEtapa'];

        if(empty($nombreEtapa)){// Verifica si el nombre de la etapa está vacío
            return "La etapa no puede estar vacía";
        }

        return $this->objetapas->alta_etapa($nombreEtapa);
    }


    public function borrar_etapa(){
        return $this->objetapas->borrar_etapa($_GET['idetapa']);// Llama al método del modelo para eliminar la etapa por su ID
    }

    public function consultar_id() {
        $idEtapa = $_GET['idetapa'];// Obtiene el ID de la etapa desde la URL
        return $this->objetapas->consultar_id($idEtapa); // Llama al método del modelo para obtener la etapa por su ID
    }

    public function modificar_etapa() {
        $idEtapa = $_POST['idetapa'];// Obtiene el ID de la etapa desde el formulario
        $nombreEtapa = $_POST['nombreEtapa'];// Obtiene el nombre de la etapa desde el formulario

        if(empty($nombreEtapa)){// Verifica si el nombre de la etapa está vacío
            return "El nombre de la etapa no puede estar vacío";// Si está vacío, devuelve un mensaje de error
        }

        return $this->objetapas->modificar_etapa($idEtapa, $nombreEtapa);// Llama al método del modelo para modificar la etapa
    }


}
?>











