// Crear un array para almacenar los números
let numeros = [];

// Solicitar la carga de 10 números
for (let i = 0; i < 10; i++) {
    let numero = parseFloat(prompt(`Ingrese el número ${i + 1}:`));
    numeros.push(numero);
}

// Calcular la suma de los últimos 5 números
let sumaUltimos5 = numeros.slice(-5).reduce((acc, num) => acc + num, 0);

// Imprimir la suma
console.log(`La suma de los últimos 5 números ingresados es: ${sumaUltimos5}`);
