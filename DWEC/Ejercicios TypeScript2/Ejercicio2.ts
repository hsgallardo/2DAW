//Ejercicio 2

//Deberá crear una clase para contemplar un rectángulo con dos propiedades:
//1 → Base
//2 → Altura

//También deberá tener un método para calcular el área (Base*Altura), este método deberá devolver un valor numérico.

class Rectangulo {
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
  
  const rectangulo = new Rectangulo(5, 10); 
  
  console.log("Área del rectángulo:", rectangulo.calcularArea());
  