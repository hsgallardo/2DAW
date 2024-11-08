function calcularPerimetroCuadrado(lado) {
    if (lado < 0) {
        return "El valor del lado no puede ser negativo."; // Validación para lados negativos
    }
    const perimetro = 4 * lado; // Fórmula para el perímetro del cuadrado
    return perimetro;
}

// Ejemplo de uso
const lado = 5;
const resultado = calcularPerimetroCuadrado(lado);
console.log("El perímetro del cuadrado es:", resultado); // Salida: El perímetro del cuadrado es: 20
