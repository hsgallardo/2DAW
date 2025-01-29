"use strict";
//Ejericio 4 | Funciones de flecha
//En este ejercicio vamos a cambiar una función normal de javascript a una función de tipo flecha.
//Cómo ya sabrás las funciones de flecha no alteran el «this» cuando se corren, por lo
//que son interesantes para cubrir algunos problemas de JavaScript.
//La función en Js sería esta:
//function suma( a, b ){
//  return (a + b)
//}
const suma = (a, b) => {
    return a + b;
};
console.log("La suma es:", suma(5, 7));
