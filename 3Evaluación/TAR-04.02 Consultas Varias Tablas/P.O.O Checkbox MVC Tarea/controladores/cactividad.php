<?php
    class Cactividad{
        private $objactividad;
        public $msg;

        public function __construct(){
            require_once("modelos/mactividad.php"); // Cargamos el modelo asociado a las actividades
            $this->objactividad = new Mactividad(); // Creamos el objeto de la clase Mactividad
        }

        public function alta_actividad() {
            if (!empty($_POST['nombreActividad'])) {
                $nombreActividad = $_POST['nombreActividad'];
        
                if (isset($_POST['etapa']) && !empty($_POST['etapa'])) {
                    $etapas = $_POST['etapa'];
                    $this->msg = $this->objactividad->alta_actividad($nombreActividad, $etapas);
                } else {
                    $this->msg = "Debe seleccionar al menos una etapa.";
                }
            } else {
                $this->msg = "El nombre de la actividad no puede estar vacío";
            }
        
            return $this->msg;
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
