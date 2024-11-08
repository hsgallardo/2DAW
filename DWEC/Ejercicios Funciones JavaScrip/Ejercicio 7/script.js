function sumarValores() {
    let suma = 0; // Inicializamos la suma en 0

    for (let i = 1; i <= 5; i++) {
        const valor = parseFloat(prompt(`Ingresa el valor ${i}:`)); // Solicitar el valor
        if (valor) { // Validar que el valor sea un número
            suma += valor; // Sumar el valor ingresado
        } else {
            console.log("Ingresa un número válido.");
            i--; // Decrementar i para repetir la entrada
        }
    }

    return suma; // Retornar la suma total
}

// Ejemplo de uso
const resultado = sumarValores();
console.log("La suma de los valores es:", resultado);
