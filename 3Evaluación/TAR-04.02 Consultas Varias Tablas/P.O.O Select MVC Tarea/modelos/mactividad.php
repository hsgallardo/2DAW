<?php
class Mactividad{
    private $conexion;

    public function __construct(){
        require_once 'conexion.php';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // Excepciones en mysqli para validar errores para el try_catch
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); // Conexión a la base de datos
    }
    
    public function alta_actividad($nombreActividad, $etapa){
        //Validación con try catch para ver si ya está en la bbdd la actividad, es decir manejo de errores
        try{
            $sql = "INSERT INTO actividad (nombreActividad, idEtapa) VALUES ('$nombreActividad', '$etapa')";  
            $resultado = $this->conexion->query($sql);

            if($resultado){
                return "Actividad registrada correctamente.";
            } else {
                return "Error al registrar actividad: ";
            }
        }catch (mysqli_sql_exception $e){
            if ($e->getCode()== 1062){ //Codígo error 1062 entrada duplicada
                return "La Actividad ya existe";
            }else{
                return "Error al registrar la actividad";
            }
        }   
    }
}

?> 