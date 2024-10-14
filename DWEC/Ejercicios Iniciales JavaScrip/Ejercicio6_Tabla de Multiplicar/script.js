/* PARTE 1 SIN EXTRA

// Pedimos al usuario un número
let numero = parseInt(prompt("Introduce un número para ver su tabla de multiplicar:"));

// Generamos la tabla de multiplicar del 1 al 10
console.log(`Tabla de multiplicar del ${numero}:`);
for (let i = 1; i <= 10; i++) {
    console.log(`${numero} x ${i} = ${numero * i}`);
}

*/


/* PARTE 2 CON EXTRA */

// Pedimos al usuario un número
let numero = parseInt(prompt("Introduce un número para ver su tabla de multiplicar:"));

// Pedimos al usuario hasta qué número quiere multiplicar (EXTRA)
let hasta = parseInt(prompt("¿Hasta qué número quieres multiplicar?"));

// Generamos la tabla de multiplicar hasta el número especificado
console.log(`Tabla de multiplicar del ${numero}:`);
for (let i = 1; i <= hasta; i++) {
    console.log(`${numero} x ${i} = ${numero * i}`);
}


