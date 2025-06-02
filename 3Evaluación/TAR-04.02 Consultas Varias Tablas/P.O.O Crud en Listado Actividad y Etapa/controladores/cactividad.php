<?php
    class Cactividad{
        private $objactividad;

        public function __construct(){
            require_once("modelos/mactividad.php"); // Cargamos el modelo asociado a las actividades
            $this->objactividad = new Mactividad(); // Creamos el objeto de la clase Mactividad
        }

        public function alta_actividad() {
            if (!empty($_POST['nombreActividad'])) {
                $nombreActividad = $_POST['nombreActividad'];
        
                if (isset($_POST['etapa']) && !empty($_POST['etapa'])) {
                    $etapas = $_POST['etapa'];
                    return $this->objactividad->alta_actividad($nombreActividad, $etapas);
                } else {
                    return  "Debe seleccionar al menos una etapa.";
                }
            } else {
                return  "El nombre de la actividad no puede estar vacío";
            }
        
        }

        public function listar_actividades(){
            return $this->objactividad->listar_actividades();
        }

        public function consultar_actividad_id() {
            $idActividad = $_GET['idactividad'];
            return $this->objactividad->consultar_actividad_id($idActividad);
        }

        public function obtener_etapas_de_actividad() {
            $idactividad = $_GET['idactividad'];

            return $this->objactividad->obtener_etapas_de_actividad($idactividad);
        }

        public function modificar_actividad() {
            $idactividad = $_POST['idactividad'];//// Obtiene el ID de la actividad desde el formulario
            $nombreActividad = $_POST['nombreActividad'];// // Obtiene el nombre de la actividad desde el formulario
            
            if (isset($_POST['etapa'])) {// // Obtiene las etapas seleccionadas, o array vacío
                $etapas = $_POST['etapa'];
            } else {
                $etapas = array();
            }

            return $this->objactividad->modificar_actividad($idactividad, $nombreActividad, $etapas);
        }


        public function borrar_actividad(){
            return $this->objactividad->borrar_actividad($_GET['idactividad']);// Llama al método del modelo para eliminar la actividad por su ID
        }
        
        
    }
?>
































<?php

// ? $_POST['etapa'] : []


?>


<?php
/*
<?php

    class Cactividad{
        private $objactividad;

        public function __construct(){
            require_once("modelos/mactividad.php"); // Cargamos el modelo asociado a las actividades
            $this->objactividad = new Mactividad(); // Creamos el objeto de la clase Mactividad
        }

        public function alta_actividad(){
            //No pasamos por parámetro lo definimos aquí
            //$nombreActividad= $_POST['nombreActividad'];
            //$etapa = isset($_POST['etapa']); //Hay que preguntar si existe $_POST['etapa], para comprobar si esta vacio
       

            //Validación para que rellene los check si no rellena ninguno
            if (empty($_POST['nombreActividad'])) {
                return "El nombre de la actividad no puede estar vacío.";
            }
            
            if (empty($_POST['etapa'])) {
                return "Debes seleccionar al menos una etapa.";
            }
            
            $nombreActividad = $_POST['nombreActividad'];
            $etapa = $_POST['etapa']; 
            
            return $this->objactividad->alta_actividad($nombreActividad, $etapa); //llama al método del modelo alta_actividad
        }

    }

?>


*/
