//Ejercicio 3 | Clases

//Ahora en TypeScript vamos a crear la clase Rombo, la cual debe tener dos propiedades:

//DiagonalVertical y DiagonalHorizontal.
//Le añadiremos un constructor al que le pasaremos los valores anteriores cuando
//instanciemos el objeto.
//Y también debe de tener un método que calcule el area, que será la multiplicación de
//DiagonalVertical * DiagonalHorizontal.

//Este método devolverá un número.

class Rombo {
    // Propiedades
    DiagonalVertical: number;
    DiagonalHorizontal: number;
  
    // Constructor
    constructor(DiagonalVertical: number, DiagonalHorizontal: number) {
      this.DiagonalVertical = DiagonalVertical;
      this.DiagonalHorizontal = DiagonalHorizontal;
    }
  
    // Método para calcular el área
    calcularArea(): number {
      return (this.DiagonalVertical * this.DiagonalHorizontal) / 2;
    }
  }
  
  // Crear una instancia de la clase Rombo
  const miRombo = new Rombo(10, 20);
  
  // Calcular y mostrar el área
  console.log("El área del rombo es:", miRombo.calcularArea());
  