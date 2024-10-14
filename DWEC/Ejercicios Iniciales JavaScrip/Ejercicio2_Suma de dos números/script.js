
// Pedir al usuario dos números
let numero1 = parseFloat(prompt("Introduce el primer número:"));
let numero2 = parseFloat(prompt("Introduce el segundo número:"));

// Calcular las operaciones (añadimos más operaciones como extra: resta, multiplicación y división)
let suma = numero1 + numero2;
let resta = numero1 - numero2;
let multiplicacion = numero1 * numero2;
let division = numero2 !== 0 ? numero1 / numero2 : "No se puede dividir entre cero";

// Mostrar los resultados en la consola
console.log("La suma es: " + suma);
console.log("La resta es: " + resta);
console.log("La multiplicación es: " + multiplicacion);
console.log("La división es: " + division);




