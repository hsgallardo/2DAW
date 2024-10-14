/*

// Crear un array de números
const numeros = [5, 12, 8, 21, 3, 15];

// Función para encontrar el número más alto
function encontrarMaximo(array) {
    let maximo = array[0]; // Asumimos que el primer elemento es el máximo

    for (let i = 1; i < array.length; i++) {
        if (array[i] > maximo) {
            maximo = array[i]; // Actualizamos el máximo si encontramos un número mayor
        }
    }

    return maximo; // Devolvemos el número más alto
}

// Llamar a la función y mostrar el resultado
const maxNumero = encontrarMaximo(numeros);
console.log("El número más alto es:", maxNumero);

*/

/* CON EXTRA */

// Crear un array vacío para almacenar los números
const numeros = [];

// Función para encontrar el número más alto
function encontrarMaximo(array) {
    let maximo = array[0]; // Asumimos que el primer elemento es el máximo

    for (let i = 1; i < array.length; i++) {
        if (array[i] > maximo) {
            maximo = array[i]; // Actualizamos el máximo si encontramos un número mayor
        }
    }

    return maximo; // Devolvemos el número más alto
}

// Solicitar números al usuario
while (true) {
    const entrada = prompt("Introduce un número (o escribe 'stop' para terminar):");

    if (entrada.toLowerCase() === "stop") {
        break; // Salir del bucle si el usuario escribe "stop"
    }

    const numero = parseFloat(entrada); // Convertir la entrada a número

    if (!isNaN(numero)) {
        numeros.push(numero); // Añadir el número al array si es válido
    } else {
        console.log("Por favor, introduce un número válido.");
    }
}

// Comprobar si hay números en el array antes de buscar el máximo
if (numeros.length > 0) {
    const maxNumero = encontrarMaximo(numeros);
    console.log("El número más alto es:", maxNumero);
} else {
    console.log("No se introdujeron números, STOP programa.");
}

