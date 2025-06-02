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
        }catch(mysqli_sql_exception $e){
            if ($e->getCode()== 1062){ //Codígo error 1062 entrada duplicada
                return "La etapa ya existe";
            }else{
                return "Error al registrar la etapa";
            }
        } 
            
    }

    public function borrar_etapa($idEtapa){
        $sql = "DELETE FROM etapas WHERE idetapa = $idEtapa"; // Consulta SQL para eliminar la etapa por su ID
        $resultado = $this->conexion->query($sql);

        if($resultado){
            return "Etapa eliminada correctamente.";
        } else {
            return "Error al eliminar la etapa.";
        }

    }
    
    public function consultar_id($idEtapa){
        $sql = "SELECT idetapa, nombreEtapa FROM etapas WHERE idetapa = $idEtapa"; // Consulta SQL para obtener una etapa por su ID
        $resultado = $this->conexion->query($sql);

        if($resultado && $resultado->num_rows > 0){
            return $resultado->fetch_assoc(); // Devuelve la etapa encontrada
        } else {
            return null; // Si no se encuentra la etapa, devuelve null
        }
    }

    
    public function modificar_etapa($idEtapa, $nombreEtapa) {
        $sql = "UPDATE etapas SET nombreEtapa = '$nombreEtapa' WHERE idetapa = $idEtapa";

        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            return "Etapa modificada correctamente.";
        } else {
            return "Error al modificar la etapa.";
        }
    }
    
}   

?>