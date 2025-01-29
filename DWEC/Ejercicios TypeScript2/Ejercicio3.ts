//Ejercicio 3

//A partir del ejercicio anterior "1-Rectángulo.ts" deberá sacar dos clases
//con una clase padre de la cual heredar factores comunes.
//Deberá crear una clase para contemplar un rectángulo y un triángulo con
//dos propiedades:
//1 → Base
///2 → Altura
//También deberá tener un método para calcular el área en el rectángulo y en el triángulo.

class Triangulo{
    public base: number;
    public altura: number;
  
    constructor(base: number, altura: number) {
      this.base = base;
      this.altura = altura;
    }
  
    public calcularArea(): number {
      return (this.base * this.altura) / 2;
    }
    }
    const triangulo = new Triangulo(5, 10);
class Rectangulo2 {
    public base: number;
    public altura: number;
  
    constructor(base: number, altura: number) {
      this.base = base;
      this.altura = altura;
    }
  
    public calcularArea(): number {
      return this.base * this.altura;
    }
  }
  
  const rectangulo2 = new Rectangulo2(5, 10); 
  
  console.log("Área del rectángulo:", rectangulo2.calcularArea());
  console.log("Área del triángulo:", triangulo.calcularArea());
  