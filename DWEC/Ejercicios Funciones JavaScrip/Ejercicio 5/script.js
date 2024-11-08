function contarDigitos(numero) {
    // Validación para asegurarse de que el número sea entero y positivo
    if (!Number.isInteger(numero) || numero < 0) {
        return "Ingresa un número entero positivo.";
    }
    
    // Convertir el número a cadena y contar la longitud
    return String(numero).length;
}

// Ejemplo de uso
const numero = 123456;
const resultado = contarDigitos(numero);
console.log("La cantidad de dígitos es:", resultado); // Salida: La cantidad de dígitos es: 5
