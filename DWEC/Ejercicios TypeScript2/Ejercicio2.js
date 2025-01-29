//Ejercicio 2
//Deberá crear una clase para contemplar un rectángulo con dos propiedades:
//1 → Base
//2 → Altura
//También deberá tener un método para calcular el área (Base*Altura), este método deberá devolver un valor numérico.
var Rectangulo = /** @class */ (function () {
    function Rectangulo(base, altura) {
        this.base = base;
        this.altura = altura;
    }
    Rectangulo.prototype.calcularArea = function () {
        return this.base * this.altura;
    };
    return Rectangulo;
}());
var rectangulo = new Rectangulo(5, 10);
console.log("Área del rectángulo:", rectangulo.calcularArea());
