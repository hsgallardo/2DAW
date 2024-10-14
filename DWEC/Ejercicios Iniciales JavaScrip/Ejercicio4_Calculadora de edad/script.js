// Obtener el año actual
let añoActual = new Date().getFullYear();

// Pedir al usuario su año de nacimiento
let añoNacimiento = prompt("Introduce tu año de nacimiento:");

// Verificar si el input es un número
if (isNaN(añoNacimiento)) {
    console.log("Error: Por favor, introduce un año válido.");
} else {
    // Convertir el input a número
    añoNacimiento = parseInt(añoNacimiento);
    
    // Verificar si el año de nacimiento es mayor al actual (EXTRA)
    if (añoNacimiento > añoActual) {
        console.log("Error: El año de nacimiento no puede ser mayor que el año actual.");
    } else {
        // Calcular la edad
        let edad = añoActual - añoNacimiento;
        console.log("Tienes: " + edad + " años.");
    }
}
