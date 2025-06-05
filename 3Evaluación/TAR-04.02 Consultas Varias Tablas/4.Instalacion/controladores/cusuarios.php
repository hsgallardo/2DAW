<?php
class Cusuarios{
    private $objusuarios;

    public function __construct(){
        require_once("modelos/musuarios.php");
        $this->objusuarios = new Musuarios();
    }

    // Método para comprobar si hay usuarios en la base de datos
    public function comprobar_usuarios(){
        $resultado = $this->objusuarios->comprobar_usuarios();
        return $resultado;
    }

    //// Método para registrar un administrador nuevo
    public function registrar_admin(){
        //Verifica que se hayan enviado los datos necesarios del formulario
         if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['password']) ){
            //Recoje los datos del formulario
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            // Encripta la contraseña para que no se guarde en texto plano en la base de datos
            $passwordEncriptada = password_hash($password, PASSWORD_DEFAULT);
            // Llama al método del modelo para guardar el usuario con la contraseña encriptada
            return $this->objusuarios->registrar_admin($nombre,$correo,$passwordEncriptada);
        }else{
            return "Faltan datos para registrar al administrador";
        }
    }

    


}

?>