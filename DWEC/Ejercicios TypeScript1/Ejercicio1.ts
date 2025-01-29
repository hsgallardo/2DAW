//Ejercicio 1 | Variables y constantes

//Este código está hecho en JavaScript y hay que pasarlo a TypeScript empleando
//variables «let» y constantes.

//El código javaScript sería así:

//var nombre;
//nombre = "Miguelo";
//var edad;
//edad = 30;
//var PERSONAJE = {
//  nombre: nombre,
//  edad: edad
//};


let nombre: string;
nombre = "Miguelo";

let edad: number;
edad = 30;

const PERSONAJE: { nombre: string; edad: number } = {
  nombre: nombre,
  edad: edad
};


