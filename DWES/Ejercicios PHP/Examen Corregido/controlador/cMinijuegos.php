<?php
    class CMinijuego{
        public $vista;
        public $objModelo;

        public function __construct(){
            require_once('modelos/mMinijuegos.php');
            $this->objModelo = new MMinijuegos();
        }
        

        public function listado_ambitos() {
        // Obtener los ámbitos desde el modelo
        $ambitos = $this->objModelo->obtenerAmbitos();       
        // Asignamos los ámbitos a la vista
        $this->vista = 'vistas/listar_ambito.php'; // Ruta de la vista

        include $this->vista;
    }

        public function mostrarFormulario($id){
            $this->vista = './vistas/modificar_ambito.php';
            return $this->objModelo->infoAmbito($id);     
        }

        public function modificarAmbito($id, $nombre){
            $this->objModelo->modificarAmbito($id, $nombre);
            header('Location: listar_ambitos.php');
        }

        public function formularioAltaMostrar(){
            $this->vista = './vistas/alta_minijuego.php';
            $ambitos = $this->objModelo->obtenerAmbitos();
            return $ambitos;
        }

        public function alta_minijuego($nombre){
            $this->vista = './vistas/alta_minijuego.php';
            $this->objModelo->añadirMinijuego($nombre);
            header('Location: listar_ambitos.php');
        }

        public function comprobarNombreMinijuego($nombre){
            $this->vista = './vistas/alta_minijuego.php';
            $existe = $this->objModelo->comprobarExistencia($nombre);
            return $existe;
        }

        
    }
?>
