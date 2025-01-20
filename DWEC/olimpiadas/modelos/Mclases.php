<?php
class Mclases {
    private $conexion;

    public function __construct() {
        require_once 'configDb.php';
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $this->conexion->set_charset("utf8");

        $controlador = new mysqli_driver();
        $controlador->report_mode = MYSQLI_REPORT_OFF;
    }

    public function mBuscarClases() {
        $SQL = "SELECT idClase, nombre FROM clases;";
        $resultado = $this->conexion->query($SQL);
        if ($resultado && $resultado->num_rows > 0) {
            $clases = [];
            while ($fila = $resultado->fetch_assoc()) {
                $clases[] = $fila;
            }
            return $clases;
        }
        return false;
    }

    public function mObtenerTodasLasPruebas() {
        $SQL = "SELECT idPrueba, nombre FROM pruebas";
        $resultado = $this->conexion->query($SQL);

        if ($resultado && $resultado->num_rows > 0) {
            $pruebas = [];
            while ($fila = $resultado->fetch_assoc()) {
                $pruebas[$fila['idPrueba']] = [
                    'nombre' => $fila['nombre'],
                    'alumnos' => []
                ];
            }
        } else {
            return false;
        }

        $SQL_alumnos = "SELECT idAlumno, nombre FROM alumnos";
        $resultado_alumnos = $this->conexion->query($SQL_alumnos);

        if ($resultado_alumnos && $resultado_alumnos->num_rows > 0) {
            $alumnos = [];
            while ($fila = $resultado_alumnos->fetch_assoc()) {
                $alumnos[] = $fila;
            }

            foreach ($pruebas as $idPrueba => $prueba) {
                $pruebas[$idPrueba]['alumnos'] = $alumnos;
            }
        }

        return $pruebas;
    }

    public function mInscribirAlumnoEnPrueba($idAlumno, $idPrueba) {
        $SQL = "INSERT INTO inscripciones (idAlumno, idPrueba) VALUES ($idAlumno, $idPrueba)";
        $this->conexion->query($SQL);
    }
}
?>