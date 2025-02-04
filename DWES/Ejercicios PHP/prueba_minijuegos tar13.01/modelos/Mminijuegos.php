<?php
class Mminijuegos {
    private $conexion;

    public function __construct(){
        require_once 'configDb.php';
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); 
        $this->conexion->set_charset("utf8"); 
    }

    // Obtener todos los ámbitos
    public function obtenerAmbitos() {
        $query = "SELECT idambito, nombre FROM ambito";
        $resultado = $this->conexion->query($query);
        $ambitos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $ambitos[] = $fila;
        }
        return $ambitos;
    }

    public function obtenerMinijuegosPorAmbito($idsAmbitos) {
        $idsAmbitos = implode(',', $idsAmbitos); // Convertir array en cadena
        $query = "SELECT m.nombre AS minijuego, m.url_juego, a.nombre AS ambito 
                  FROM minijuegos m
                  JOIN ambito a ON m.idambito = a.idambito
                  WHERE m.idambito IN ($idsAmbitos)";
        
        $resultado = $this->conexion->query($query);
        $minijuegos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $minijuegos[] = $fila;
        }
        return $minijuegos;
    }
    
}
?>
