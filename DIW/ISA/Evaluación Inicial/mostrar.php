
<?php

$Nombre = $_GET['name']; //Verificar si el campo fue enviado: $Nombre = isset($_GET['name']) ? $_GET['name'] : 'Nombre no proporcionado';
$Correo = $_GET['email']; // Verificar si el campo "email" fue enviado: $Correo = isset($_GET['email']) ? $_GET['email'] : 'Correo no proporcionado';
$Telefono = $_GET['phone']; // Verificar si el campo "phone" fue enviado: $Telefono = isset($_GET['phone']) ? $_GET['phone'] : '';  
$Mensaje = $_GET['message']; // Verificar si el campo "message" fue enviado: $Mensaje = isset($_GET['message']) ? $_GET['message'] : '';
$Genero = $_GET['gender'];  // Verificar si el campo "gender" fue enviado: $Genero = isset($_GET['gender']) ? $_GET['gender'] : 'No especificado';
$Suscripcion = $_GET['newsletter']; // Verificar si el checkbox "newsletter" fue marcado: $Suscripcion = isset($_GET['newsletter']) ? 'Sí' : 'No';

// Mostrando los valores recibidos
echo $Nombre. "<br>";
echo $Correo. "<br>";
echo $Telefono. "<br>";
echo $Mensaje. "<br>";
echo $Genero. "<br>";
echo $Suscripcion. "<br>";

?>