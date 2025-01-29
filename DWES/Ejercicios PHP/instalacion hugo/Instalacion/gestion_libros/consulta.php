<?php
require_once 'configdb.php';

class Libro {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function obtenerLibros() {
        $consulta = '
        SELECT 
            libros.idLibro, libros.isbn, libros.titulo, libros.precio, editorales.nombreEditorial
        FROM 
            libros
        LEFT JOIN 
            editorales ON libros.idEditorial = editorales.idEditorial
        ORDER BY 
            libros.titulo;
        ';
        
        $resultado = $this->db->conexion->query($consulta);
        $libros = [];

        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $libros[] = [
                    'idLibro' => $fila['idLibro'],
                    'isbn' => $fila['isbn'],
                    'titulo' => $fila['titulo'],
                    'precio' => $fila['precio'],
                    'nombreEditorial' => $fila['nombreEditorial']
                ];
            }
        }

        $this->db->cerrarConexion();
        return $libros;
    }
}

$libro = new Libro();
$libros = $libro->obtenerLibros();
?>
