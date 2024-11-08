// Crear un array para almacenar las alturas
let alturas = [];

// Ingresar las alturas
for (let i = 0; i < 5; i++) {
    let entrada = parseFloat(prompt(`Ingrese la altura de la persona ${i + 1} en metros:`));
    alturas.push(entrada);
}

// Calcular la suma de las alturas
let suma = alturas.reduce((total, valor) => total + valor, 0);

// Calcular la altura promedio
let promedio = suma / alturas.length;

// Mostrar la altura promedio
console.log(`La altura promedio de las personas es: ${promedio.toFixed(2)} metros`);

