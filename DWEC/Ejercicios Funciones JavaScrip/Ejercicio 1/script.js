function encontrarMenor(num1, num2, num3) {
    let menor = num1; // Asumimos que num1 es el menor inicialmente

    if (num2 < menor) {
        menor = num2; // Si num2 es menor que el actual menor, lo actualizamos
    }
    if (num3 < menor) {
        menor = num3; // Hacemos lo mismo con num3
    }

    return menor; // Devolvemos el menor
}

// Ejemplo de uso
const resultado = encontrarMenor(33, 93, 8);
console.log("El menor es:", resultado); // Salida: El menor es: 8
