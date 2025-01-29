//Ejercicio 4
//La siguiente función contendrá parámetros obligatorios, opcionales y otros serán por defecto si no le pasamos ninguno.
//Deberá adaptarlos de la siguiente forma:
//* nombre → obligatorio
//* edad → opcional
//* arma → por defecto u omisión será "pistola"
//function getVillano( nombre, edad, arma ) {
//  var mensaje;
//  if( edad ) {
//      mensaje = nombre + " tiene una edad de: " + edad + " y arma: " +
//arma;
//  } else {
//  mensaje = nombre + " tiene una " + edad
//  }
//};
var getVillano = function (nombre, edad, arma) {
    if (arma === void 0) { arma = "pistola"; }
    var mensaje;
    if (edad !== undefined) {
        mensaje = "".concat(nombre, " tiene una edad de: ").concat(edad, " y arma: ").concat(arma);
    }
    else {
        mensaje = "".concat(nombre, " tiene una arma: ").concat(arma);
    }
    return mensaje;
};
console.log(getVillano("Joker", 45, "cuchillo"));
console.log(getVillano("Bane"));
