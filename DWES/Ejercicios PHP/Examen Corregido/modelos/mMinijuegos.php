<?php
    require_once('config/configdb.php');

    class MMinijuegos{
        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASEDATOS);
            if($this->conexion->connect_error){
                die("Error conexion: ".$this->conexion->connect_error);
            }
        }
        
        //Obtención ámbitos
        public function obtenerAmbitos(){
            $sql = 'SELECT * FROM ambito';
            $resultado = $this->conexion->query($sql);

            $ambitos=[];
            while($fila = $resultado->fetch_assoc()){
                $ambitos[]=$fila;
            }

            return $ambitos;
        }

        //Datos del ambito 
        public function infoAmbito($id){
            $sql = 'SELECT * FROM ambito WHERE idambito=?';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_assoc();
        }

        //Modificar ambito
        public function modificarAmbito($id,$nombre){
            $sql = 'UPDATE ambito SET nombre = ? WHERE idambito = ?';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param('si', $nombre, $id);
            $stmt->execute();
        }

        //Comprobar si existe el minijuego
        public function comprobarExistencia($nombre){
            $sql = 'SELECT COUNT(*) FROM minijuegos WHERE nombre = ?';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt->execute();
            $stmt->bind_result($resultado);
            $stmt->fetch();
            return $resultado > 0;
        }

        //Añadir minijuego
        public function AñadirMinijuego($nombre){
            $sql = 'INSERT INTO minijuegos(nombre) VALUES (?)';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt->execute();
        }
    }
?>