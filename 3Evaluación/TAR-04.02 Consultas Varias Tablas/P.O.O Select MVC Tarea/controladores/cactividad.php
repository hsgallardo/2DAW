<?php
    class Cactividad{
        private $objactividad;

        public function __construct(){
            require_once("modelos/mactividad.php"); // Cargamos el modelo asociado a las actividades
            $this->objactividad = new Mactividad(); // Creamos el objeto de la clase Mactividad
        }

        public function alta_actividad(){
            $nombreActividad=$_POST['nombreActividad'];
            $etapa=$_POST['etapa'];

            if(empty($nombreActividad)){

                return "El nombre de la actividad no puede estar vacío";
            }

            return $this->objactividad->alta_actividad($nombreActividad, $etapa); // Llama al método alta_actividad del modelo
        }

    }
?>

