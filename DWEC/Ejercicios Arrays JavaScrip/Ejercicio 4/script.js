// Definir el tamaño del vector
const tamaño = parseInt(prompt("Ingrese el tamaño de los vectores:"));

// Crear los vectores
let vector1 = [];
let vector2 = [];
let sumaVector = [];

// Cargar el primer vector
for (let i = 0; i < tamaño; i++) {
    let valor = parseFloat(prompt(`Ingrese el valor ${i + 1} para el primer vector:`));
    vector1.push(valor);
}

// Cargar el segundo vector
for (let i = 0; i < tamaño; i++) {
    let valor = parseFloat(prompt(`Ingrese el valor ${i + 1} para el segundo vector:`));
    vector2.push(valor);
}

// Sumar componente a componente
for (let i = 0; i < tamaño; i++) {
    sumaVector.push(vector1[i] + vector2[i]);
}

// Mostrar el resultado
console.log(`La suma de los dos vectores es: ${sumaVector}`);

/*Tamaño del vector: Se pide al usuario que ingrese el tamaño de los vectores.
Vectores: Se crean tres vectores: vector1, vector2 y sumaVector.
Carga de vectores: Se utilizan dos bucles para ingresar los valores de los dos vectores.
Suma: Un tercer bucle suma componente a componente los elementos de vector1 y vector2, almacenando el resultado en sumaVector.
Salida: Se muestra el resultado de la suma de los vectores. */

