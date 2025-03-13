<?php
Class Mminijuego {
    private $conexion;

    public function __construct() {
        require_once("config/config.php");
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    }

    // mMostrarMinijuego: Muestra todos los minijuegos con su nombre, ámbito, etapas y imagen.
    public function mMostrarMinijuego() {
        $SQL = "SELECT minijuegos.idjuego, minijuegos.nombre, minijuegos.idambito, minijuegos.num_etapas, minijuegos.imagen, ambito.nombre as Anombre
                FROM minijuegos
                INNER JOIN ambito ON minijuegos.idambito = ambito.idambito";
        $datos = $this->conexion->query($SQL);

        $resultado = [];
        while ($fila = $datos->fetch_assoc()) {
            $resultado[] = [
                "idjuego" => $fila['idjuego'],
                "nombre" => $fila['nombre'],
                "idambito" => $fila['idambito'],
                "num_etapas" => $fila['num_etapas'],
                "imagen" => $fila['imagen'],
                "Anombre" => $fila['Anombre']
            ];
        }
        return $resultado;
    }

    // mInsertarMinijuego: Inserta un nuevo minijuego en la base de datos.
    public function mInsertarMinijuego($nombre, $idambito, $numetapas, $imagen) {
        $SQL = "INSERT INTO minijuegos (nombre, idambito, num_etapas, imagen) VALUES ('$nombre', $idambito, $numetapas, '$imagen')";
        try {
            $this->conexion->query($SQL);
            return true;
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == "1062") {
                return "csu";  // Nombre duplicado
            }
            return false;
        }
    }

    // mModificarMinijuego: Modifica un minijuego existente en la base de datos.
    public function mModificarMinijuego($nombre, $idambito, $numetapas, $imagen) {
        $idjuego = $_SESSION['idjuego'];
        $SQL = "UPDATE minijuegos SET nombre='$nombre', idambito=$idambito, num_etapas=$numetapas, imagen='$imagen' WHERE idjuego=$idjuego";
        try {
            $this->conexion->query($SQL);
            return true;
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == "1062") {
                return "csu";  // Nombre duplicado
            }
            return false;
        }
    }

    // mObtenerMinijuego: Obtiene los detalles de un minijuego por su ID.
    public function mObtenerMinijuego($id) {
        $SQL = "SELECT * FROM minijuegos WHERE idjuego=$id";
        $resultado = $this->conexion->query($SQL)->fetch_assoc();
        return $resultado;
    }

    // mBorrarMinijuego: Elimina un minijuego de la base de datos por su ID.
    public function mBorrarMinijuego($id) {
        $SQL = "DELETE FROM minijuegos WHERE idjuego=$id";
        try {
            $this->conexion->query($SQL);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    // mObtenerMinijuegoModificar: Obtiene los detalles de un minijuego para poder modificarlo.
    public function mObtenerMinijuegoModificar($id) {
        $SQL = "SELECT minijuegos.idjuego, minijuegos.idambito, minijuegos.num_etapas, minijuegos.imagen, minijuegos.nombre as mNombre, ambito.nombre as aNombre
                FROM minijuegos
                INNER JOIN ambito ON minijuegos.idambito = ambito.idambito
                WHERE minijuegos.idjuego=$id";
        $resultado = $this->conexion->query($SQL)->fetch_assoc();
        return $resultado;
    }
}
?>
