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

    public function recogerAmbitos($nombreAmbito) {
        $mensaje = '';
    
        try {
            $sql = 'INSERT INTO ambito(nombre) VALUES (?)';
            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param('s', $nombre);
    
            foreach ($nombreAmbito as $nombre) {
                try {
                    $stmt->execute();
                    $mensaje .= "El ámbito '$nombre' se ha agregado correctamente.<br>";
                } catch (mysqli_sql_exception $e) {
                    $mensaje .= "Error: El ámbito '$nombre' ya existe.<br>";
                }
            }
    
            $stmt->close();
        } catch (Exception $e) {
            $mensaje .= "Error general: " . $e->getMessage() . "<br>";
        }
    
        return $mensaje;
    }
     
}
?>

