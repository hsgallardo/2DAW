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
}
?> 