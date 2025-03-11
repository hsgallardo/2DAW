<?php
Class Mminijuego{
    private $conexion;

    public function __construct()
    {
        require_once("config/configdb.php");
        $this->conexion = new mysqli(SERVIDOR,USUARIO,PASSWORD,BBDD);
    }
    
    public function mInsertarMinijuego($nombre,$idambito,$numetapas){
        $SQL="INSERT INTO minijuegos (nombre,idambito,num_etapas) VALUES(?,?,?)";
        $stmt= $this->conexion->prepare($SQL);
        $stmt->bind_param("sii",$nombre, $idambito, $numetapas);
        try{
            $stmt->execute();
            return true;
        }catch(mysqli_sql_exception $e){
            if($e->getCode()=="1062"){
                return "csu";
            }
           return false;
        }
        return false;
        
    }
}
?>