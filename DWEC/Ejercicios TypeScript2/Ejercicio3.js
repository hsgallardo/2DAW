//Ejercicio 3
//A partir del ejercicio anterior "1-Rectángulo.ts" deberá sacar dos clases
//con una clase padre de la cual heredar factores comunes.
//Deberá crear una clase para contemplar un rectángulo y un triángulo con
//dos propiedades:
//1 → Base
///2 → Altura
//También deberá tener un método para calcular el área en el rectángulo y en el triángulo.
var Triangulo = /** @class */ (function () {
    function Triangulo(base, altura) {
        this.base = base;
        this.altura = altura;
    }
    Triangulo.prototype.calcularArea = function () {
        return (this.base * this.altura) / 2;
    };
    return Triangulo;
}());
var triangulo = new Triangulo(5, 10);
var Rectangulo2 = /** @class */ (function () {
    function Rectangulo2(base, altura) {
        this.base = base;
        this.altura = altura;
    }
    Rectangulo2.prototype.calcularArea = function () {
        return this.base * this.altura;
    };
    return Rectangulo2;
}());
var rectangulo2 = new Rectangulo2(5, 10);
console.log("Área del rectángulo:", rectangulo2.calcularArea());
console.log("Área del triángulo:", triangulo.calcularArea());
