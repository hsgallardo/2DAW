function encontrarMayor(num1, num2, num3) {
    let mayor = num1; // Asumimos que num1 es el mayor inicialmente

    if (num2 > mayor) {
        mayor = num2; // Si num2 es mayor que el actual mayor, lo actualizamos
    }
    if (num3 > mayor) {
        mayor = num3; // Hacemos lo mismo con num3
    }

    return mayor; // Devolvemos el mayor
}

// Ejemplo de uso
const resultado = encontrarMayor(33, 93, 8);
console.log("El mayor es:", resultado); // Salida: El mayor es: 93

