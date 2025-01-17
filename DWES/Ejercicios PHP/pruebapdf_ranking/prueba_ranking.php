<?php
require('fpdf.php');

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "viajeentreculturas_prueba"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "SELECT nombre, puntos, numFallos, tiempo FROM puntuacion ORDER BY puntos"; 
$result = $conn->query($sql);


$pdf = new FPDF();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Ranking de Puntuaciones', 0, 1, 'C');
$pdf->Ln(10); 

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(30, 10, 'Puntos', 1, 0, 'C');
$pdf->Cell(30, 10, 'Fallos', 1, 0, 'C');
$pdf->Cell(40, 10, 'Tiempo', 1, 1, 'C');


$pdf->SetFont('Arial', '', 12);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $pdf->Cell(50, 10, $row['nombre'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['puntos'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['numFallos'], 1, 0, 'C');
        $pdf->Cell(40, 10, $row['tiempo'], 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No hay datos disponibles', 0, 1, 'C');
}

$conn->close();
$pdf->Output();
?>
