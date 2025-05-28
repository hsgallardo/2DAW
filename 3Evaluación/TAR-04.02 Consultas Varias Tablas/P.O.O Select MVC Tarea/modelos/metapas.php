<?php
class Metapas{

    private $conexion;

    public function __construct(){
        require_once 'conexion.php';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); // Conexión a la base de datos
    }

    public function listar_etapas(){
        $sql = "SELECT idetapa, nombreEtapa FROM etapas"; // Consulta SQL para obtener todas las etapas
        $resultado = $this->conexion->query($sql); 

        $arrayEtapas = [];

        // Comprobar si la consulta se ejecutó correctamente y si hay resultados los guarda en un array
        if ($resultado && $resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $arrayEtapas[] = $row;
            }
        }

        return $arrayEtapas; // Me Devuelve el array
    }

    public function alta_etapa($nombreEtapa){
        try{
           $sql = "INSERT INTO etapas (nombreEtapa) VALUES ('$nombreEtapa')";
        
            $resultado = $this->conexion->query($sql);

            if($resultado){
                return "Etapa registrada correctamente.";
            } else {
                return "Error al registrar etapa: " ;
            } 
        }catch (mysqli_sql_exception $e){
            if ($e->getCode()== 1062){ //Codígo error 1062 entrada duplicada
                return "La etapa ya existe";
            }else{
                return "Error al registrar la etapa";
            }
        }
            
    }
}

?>