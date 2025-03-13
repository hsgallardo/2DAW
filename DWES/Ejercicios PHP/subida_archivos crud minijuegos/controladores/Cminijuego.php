<?php
class Cminijuego {
    private $objminijuego;
    public $vista;
    
    public function __construct() {
        require_once("modelos/Mminijuego.php");
        require_once("modelos/Mambito.php");

        
        $this->objminijuego = new Mminijuego();
        $this->objambito = new Mambito();
    }

    // cMostrarMinijuego: Muestra todos los minijuegos existentes en la base de datos.
    public function cMostrarMinijuego() {
        $this->vista = 'verMinijuegos';
        $resultado = $this->objminijuego->mMostrarMinijuego();
        if (is_array($resultado)) {
            return $resultado;  // Devuelve la lista de minijuegos
        }
    }

    // cInsertarMinijuego: Inserta un nuevo minijuego en la base de datos después de verificar los datos y subir la imagen.
    public function cInsertarMinijuego() {
        $this->vista = 'mostrarListaMinijuegos';
        // Validación de los datos del formulario.
        if (empty($_POST['nombre']) || !isset($_POST['ambitos']) || !isset($_POST['etapas']) || empty($_FILES['imagen']['name'])) {
            return "Datos por poner";  
        }
        // Recoge los datos del formulario
        $nombre = $_POST['nombre'];
        $idambito = $_POST['ambitos'];
        $etapas = $_POST['etapas'];
        $imagen = $_FILES['imagen'];
        $numetapas = count($etapas);

        // Validación del tipo de archivo de la imagen.
        $tipos = ['image/webp', 'image/gif', 'image/jpeg', 'image/png'];
        if (!in_array($imagen['type'], $tipos)) {
            return 'Debe subir archivos con formato PNG, JPG, GIF, o WebP.'; 
        }
        
        // Subir la imagen
        $target_dir = "assets/img/";
        $target_file = $target_dir . basename($imagen["name"]);
        if (!move_uploaded_file($imagen["tmp_name"], $target_file)) {
            return 'Error al subir la imagen';  
        }

        // Inserta el minijuego en la base de datos
        $resultado = $this->objminijuego->mInsertarMinijuego($nombre, $idambito, $numetapas, $target_file);
        
        if ($resultado === "csu") {
            return 'Nombre ya en uso';  
        }

        if ($resultado === true) {
            return 'Correcto'; 
        }

        return 'Error al insertar el minijuego'; 
    }

    // cMostrarMinijuegoModificar: Muestra el formulario para editar un minijuego, cargando los datos a modificar.
    public function cMostrarMinijuegoModificar(){
        session_start();
        $this->vista = 'formularioEditarMinijuego';
        
        // Verifica que se haya pasado un ID de minijuego a modificar.
        if (!isset($_GET['id'])) {
            return "Datos por poner";  // Si no se pasa ID, muestra este mensaje
        }

        $_SESSION['idjuego'] = $_GET['id'];  
        $idjuego = $_GET['id'];
        
        // Obtiene los datos del minijuego y los ámbitos disponibles
        $minijuego = $this->objminijuego->mObtenerMinijuegoModificar($idjuego);
        $ambitos = $this->objambito->mMostrarAmbitos();
        
        return [$minijuego, $ambitos];  // Devuelve los datos para mostrarlos en el formulario
    }

    // cModificarMinijuego: Modifica los datos de un minijuego existente.
    public function cModificarMinijuego(){
        session_start();
        $this->vista = 'mostrarListaMinijuegos';

        // Validación de los datos del formulario.
        if (empty($_POST['nombre']) || !isset($_POST['ambitos']) || !isset($_POST['etapas'])) {
            return "Datos por poner";  
        }

        // Recoge los datos del formulario
        $nombre = $_POST['nombre'];
        $idambito = $_POST['ambitos'];
        $imagen = $_FILES['imagen'];
        $etapas = $_POST['etapas'];
        $numetapas = count($etapas);
        $idjuego = $_SESSION['idjuego'];  // Obtiene el ID del minijuego a modificar desde la sesión

        // Obtiene el minijuego para verificar si existe
        $minijuego = $this->objminijuego->mObtenerMinijuego($idjuego);
        if (!$minijuego) {
            return 'Minijuego no encontrado';  
        }
        
        // Si se sube una nueva imagen se valida y reemplaza la imagen existente.
        if(!empty($imagen['name'])){
            $tipos = ['image/webp', 'image/gif', 'image/jpeg', 'image/png'];
            if (!in_array($imagen['type'], $tipos)) {
                return 'Debe subir archivos con formato PNG, JPG, GIF, o WebP.';  
            }
            
            // Elimina la imagen antigua.
            $imagenRuta = $minijuego['imagen'];
            if (file_exists($imagenRuta)) {
                unlink($imagenRuta);
            }

            // Sube la nueva imagen.
            $target_dir = "assets/img/";
            $target_file = $target_dir . basename($imagen["name"]);
            if (!move_uploaded_file($imagen["tmp_name"], $target_file)) {
                return 'Error al subir la imagen';  
            }
        }else{
            $target_file = $minijuego['imagen'];  // Si no se sube nueva imagen, mantiene la anterior
        }

        // Modifica el minijuego en la base de datos
        $resultado = $this->objminijuego->mModificarMinijuego($nombre, $idambito, $numetapas, $target_file);

        if ($resultado === "csu") {
            return 'Nombre en uso';  
        }

        if ($resultado === true) {
            return 'Modificación correcta';  
        }

        return 'Error al modificar el minijuego';  
    }

    // cBorrarMinijuego: Elimina un minijuego de la base de datos y su imagen asociada.
    public function cBorrarMinijuego(){
        $this->vista = 'mostrarListaMinijuegos';
        
        // Verifica que se haya pasado un ID de minijuego a borrar.
        if (!isset($_GET['id'])) {
            return "Datos por poner"; 
        }

        $idjuego = $_GET['id'];

        // Obtiene los datos del minijuego para verificar si existe
        $minijuego = $this->objminijuego->mObtenerMinijuego($idjuego);
        if (!$minijuego) {
            return 'Minijuego no encontrado'; 
        }

        // Elimina la imagen
        $imagen = $minijuego['imagen'];
        if (file_exists($imagen)) {
            unlink($imagen);  
        }

        // Elimina el minijuego de la base de datos.
        $resultado = $this->objminijuego->mBorrarMinijuego($idjuego);
        if ($resultado === true) {
            return 'Borrado correcto';  
        }
        return 'Error al borrar el minijuego';  
    }
}
?>
