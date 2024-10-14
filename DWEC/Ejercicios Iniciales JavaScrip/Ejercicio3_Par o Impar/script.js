// Pedir al usuario un número
let numero = prompt("Introduce un número:");

// Verificar si el input es un número (EXTRA)
if (isNaN(numero)) {
    console.log("Error: Por favor, introduce un número válido.");
} else {
    // Convertir el input a número
    numero = parseFloat(numero);
    
    // Verificar si el número es par o impar
    if (numero % 2 === 0) {
        console.log("Este número es impar.");
    } else {
        console.log("Este número es par.");
    }
}
