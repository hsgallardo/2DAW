<?php
class Mactividad{
    private $conexion;


    public function __construct(){
        require_once 'conexion.php';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); // Conexión a la base de datos
    }
    
    public function alta_actividad($nombreActividad, $etapas){
        try{
            // Insertar actividad
            $sql = "INSERT INTO actividad (nombreActividad) VALUES ('$nombreActividad')";
            $resultado = $this->conexion->query($sql);

            if($resultado){
            $idActividad = $this->conexion->insert_id;
            //Usamos el insert_id para obtener el ID que generó la bbdd para insertar la nueva actividad, y así poder usar
            //ese ID, para guardar las etapas relaciones en la tabla actividad_etapa

            // Insertar cada etapa asociada
            foreach($etapas as $etapa){
                $sql = "INSERT INTO actividad_etapa (idactividad, idetapa) VALUES ($idActividad, $etapa)";
                $this->conexion->query($sql);
            }
                return "Actividad registrada correctamente.";
            }else{
                return "Error al registrar actividad.";
            }
        }catch (mysqli_sql_exception $e){
            if ($e->getCode()==1062){
                return "La actividad ya existe";
            }else{
                return "Error al registrar la actividad";
            }
        }
    }

    public function listar_actividades(){
        $sql = "SELECT idactividad, nombreActividad FROM actividad";
        $resultado = $this->conexion->query($sql);

        $arrayActividades=[];

        if($resultado && $resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $arrayActividades[] = $row;
            }
        }
        return $arrayActividades;
    }

    public function consultar_actividad_id($idActividad) {
        $sql = "SELECT idactividad, nombreActividad FROM actividad WHERE idactividad = $idActividad"; // Consulta SQL para obtener una actividad por su ID
        $resultado = $this->conexion->query($sql);
    
        if ($resultado && $resultado->num_rows > 0) {
            return $resultado->fetch_assoc(); // Devuelve la actividad encontrada
        } else {
            return null; // Si no se encuentra la actividad, devuelve null
        }
    }

    // método para obtener las etapas seleccionadas de una actividad
    public function obtener_etapas_de_actividad($idactividad){
        $sql = "SELECT idetapa FROM actividad_etapa WHERE idactividad = $idactividad";
        $resultado = $this->conexion->query($sql);
        $etapas = [];

        if($resultado && $resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $etapas[] = $row['idetapa'];
            }
        }
        return $etapas;
    }


    public function modificar_actividad($idactividad, $nombre, $etapas) {
        // Actualizar el nombre de la actividad
        $sql = "UPDATE actividad SET nombreActividad = '$nombre' WHERE idactividad = $idactividad";
        $resultado = $this->conexion->query($sql);

        if($resultado){
            // Eliminar las etapas actuales asociadas a la actividad
            $this->conexion->query("DELETE FROM actividad_etapa WHERE idactividad = $idactividad");

            // Insertar las nuevas etapas asociadas
            foreach ($etapas as $idetapa) {
                $this->conexion->query("INSERT INTO actividad_etapa (idactividad, idetapa) VALUES ($idactividad, $idetapa)");
            }

            return "Actividad modificada correctamente.";
        } else {
            return "Error al modificar la actividad.";
        }
    }

    public function borrar_actividad($idActividad){
        $sql = "DELETE FROM actividad WHERE idactividad = $idActividad"; // Consulta SQL para eliminar la actividad por su ID
        $resultado = $this->conexion->query($sql);

        if($resultado){
            return "Actividad eliminada correctamente.";
        } else {
            return "Error al eliminar la actividad.";
        }

    }


    
}
?> 