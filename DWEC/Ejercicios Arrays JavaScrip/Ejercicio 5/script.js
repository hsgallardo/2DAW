// Crear un vector de 8 elementos
let vector = []; //Array que almacenará los 8 elementos
const tamaño = 8;  //Constante que serán los 8 elementos que tendrá el vector

// Cargar el vector
for (let i = 0; i < tamaño; i++) {
    let valor = parseFloat(prompt(`Ingrese el valor ${i + 1}:`));
    vector.push(valor);
}

// Inicializar variables para los cálculos
let acumuladoTotal = 0;
let acumuladoMayores36 = 0;
let contadorMayores50 = 0;

// Recorrer el vector y realizar los cálculos
for (let i = 0; i < tamaño; i++) {
    acumuladoTotal += vector[i]; // Suma total
    if (vector[i] > 36) {
        acumuladoMayores36 += vector[i]; // Suma de mayores a 36
    }
    if (vector[i] > 50) {
        contadorMayores50++; // Contador de mayores a 50
    }
}

// Mostrar resultados
console.log(`El valor acumulado de todos los elementos del vector es: ${acumuladoTotal}`);
console.log(`El valor acumulado de los elementos mayores a 36 es: ${acumuladoMayores36}`);
console.log(`La cantidad de valores mayores a 50 es: ${contadorMayores50}`);
